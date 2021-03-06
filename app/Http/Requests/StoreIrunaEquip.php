<?php

namespace App\Http\Requests;

use App\Ability;
use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Irunaitem;
use Illuminate\Contracts\Validation\Validator;

class StoreIrunaEquip extends FormRequest
{

    const Category = array('Swords', 'Bows', 'Claws', 'Throwing', 'Canes', 'Special', 'Additional', 'Armor');
    const Ability = array('Gentleness', 'Provoke', "Magic", "Mp Cost", "Intelligence", "Strength", "Agility", 
    "Evasion", "Fixed Melee", "Fixed Magic", "Rate Cut", "Melee Defense", "Magic Defense", "Dexterity", "Critical",
    "Attack", "Quick cool", "Quick use", "Wind blessing", "Earth blessing", "Fire blessing", "Water blessing", "Striver");
    const Xtal = 'Crystas';
    const Null = "";
    const Type = array('Additional','Weapon', 'Special', 'Body');

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required',
                'atk' => 'required|max:400|integer|min:0',
                'def' => 'required|max:70|integer|min:0',
                'type' => 'required|alpha',
                'refinement' => 'required|integer|max:9|min:0',
                'price' => 'required|alpha_num|min:1|max:12',
                "ability_level" => 'integer|min:0|max:5'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'The item name cannot be blank',
            'atk.required' => 'The atk of your equipment cannot be blank',
            'def.required' => 'The def of your equipment cannot be blank',
            'price.max' => 'The price cannot be greater than 999,999,999,999'
        ];
    }

    public function withValidator(Validator $validator){
        $validator->after(function($validator){
           $name = $this->request->get('name');
           $ability = $this->request->get('ability');
           $slot1 = $this->request->get('slot1');
           $slot2 = $this->request->get('slot2');
           $type = $this->request->get('type');
            
           if($this->invalidEquipment($name, $ability, $type, $slot1, $slot2)){
            $validator->errors()->add('nameError', 'The name does not seem right');
            $validator->errors()->add('mainError', 'Please check your previous submission, something went wrong');
           }

           if($this->doNotHaveContactLink()){
            $validator->errors()->add('nameError', 'You do not have contact link, go to /account to edit your contact information');
            $validator->errors()->add('mainError', 'You do not have contact link, go to /account to edit your contact information');
            }


            if($this->invalidPrice()){
                $validator->errors()->add('nameError', 'The price is not valid');
                $validator->errors()->add('mainError', 'The price is not valid');
            }
        
           
        });
    }

    public function doNotHaveContactLink(){
        if((auth()->user()->facebook == null or auth()->user()->facebook == "") and (auth()->user()->discord == null or auth()->user()->discord == "" )){
            return true;
        } else{
            return false;
        }
    }

    public function invalidEquipName($name, $type){
        $item = Irunaitem::where('name', $name)->first();
        if($item){
            if(in_array($item->category, StoreIrunaEquip::Category)){
                if($this->invalidEquipType($name, $type)){
                    return true;
                } else{
                    return false;
                }
            } else{
               return true;
            }
        } else{
            return true;
        }
       
    }

    public function invalidAbility($ability){
        if($ability != ""){
            $validAbi = Ability::where('type', $ability)->first();
            if($validAbi){
                return false;
            }else{
                return true;
            } 
        } else{
            return false;
        }
    }
    /**
     * 
     * Check if xtal is valid or not
     */
    public function invalidSlotXtal($xtal1, $xtal2){
        if($xtal1 == ""){
            return false;
        } else{
            if(substr($xtal1, 0, 3) != '◇'){
                $xtal1 = '◇'.$xtal1;
            }
            $item1 = Irunaitem::getItem($xtal1)->first();
            if($item1){
                return $this->checkForValidSlot($item1);
            } else{
                return false;
            }
        }
        if($xtal2 == ""){
            return false;
        } else{
            if(substr($xtal2, 0, 3) != '◇'){
                $xtal2 = '◇'.$xtal2;
            }
            $item2 = Irunaitem::getItem($xtal2)->first();
        
            if($item2){
                return $this->checkForValidSlot($item2);
            } else{
                return false;
            }
        }
        
    }

    public function invalidEquipType($equip, $type){
        if(in_array($type, StoreIrunaEquip::Type)){
            return false;
        } else{
            return true;
        }
    }

    public function invalidEquipment($name, $ability, $type, $slot1, $slot2){
        if($this->invalidAbility($ability) || $this->invalidEquipName($name, $type) || $this->invalidSlotXtal($slot1, $slot2)){
            return true;
        } else{
            return false;
        }
    }

    public function checkForValidSlot($xtal){
        if($xtal->category != StoreIrunaEquip::Xtal){
            return true;
        } else{
            return false;
        }
    }

    public function invalidPrice(): bool{
        if(in_array(strtolower(substr(request('price'), -1)), StoreIrunaItem::PriceType)){
            $priceDenote = strtolower(substr(request('price'), -1));
            $priceNumber = substr(request('price'), 0, -1);
            try{
                if($this->validConvertPrice($priceDenote, $priceNumber)){
                    return false;
                } else{
                    return true;
                }
            } catch(Exception $e){

            }
           return false;

        } else
        {
            if(is_numeric(request('price'))){
                return false;
            } 
            else{
                return true;
            }
        }
    }

    public function validConvertPrice($priceDenote, $priceNumber){
        if($priceDenote == 'b'){
            
            if($this->validBillionPrice($priceDenote, $priceNumber)){
                return true;
            }else{
                return false;
            }
            
        }
        if($priceDenote == 'm'){
            
            if($this->validMillionPrice($priceDenote, $priceNumber)){
                return true;
            } else{
                return false;
            }
        }

        if($priceDenote == 'k'){
            if($this->validThousandsPrice($priceDenote, $priceNumber)){
                return true;
            } else{
                return false;
            }
        }
    }

    private function validBillionPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
                
            if((int)$priceNumber * 1000000000 > 999999999999){
                return false;
            } else{
                
                return true;
            }
        } else{
            return false;
        }
    }

    private function validMillionPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

    private function validThousandsPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

}
