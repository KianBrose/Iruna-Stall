<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Irunaitem;
use Illuminate\Contracts\Validation\Validator;

class StoreIrunaAi extends FormRequest
{
    const ColorCode = array('Red', 'Blue', 'Green');
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
            'color' => 'required|alpha',
            'price' => 'required|alpha_num|min:1|max:12',
            'quantity' => 'required||max:99|min:1|max:9999'
        ];
    }
    /**
     * 
     * 
     */

    public function messages(){
        return [
            'price.max' => 'The price cannot be greater than 999,999,999,999'
        ];
    }

    public function withValidator(Validator $validator){
        $validator->after(function($validator){
            $color = $this->request->get('color');
            $name = $this->request->get('name');
            if($this->invalidColor($color)){
                $validator->errors()->add('colorError', 'The color does not seem right');
                $validator->errors()->add('mainError', 'Please check your previous submission, something went wrong');
            }
            if($this->invalidItemName($name)){
                $validator->errors()->add('nameError', 'Something is going wrong with this field');
                $validator->errors()->add('mainError', 'Please check your previous submission, something went wrong ');
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
    /**
     * 
     * check valid color
     * 
     * @return bool
     */
    public function invalidColor($color){
       if(in_array($color, StoreIrunaAi::ColorCode)){
            return false;
       } else{
           return true;
       }
    }

    public function doNotHaveContactLink(){
        if((auth()->user()->facebook == null or auth()->user()->facebook == "") and (auth()->user()->discord == null or auth()->user()->discord == "" )){
            return true;
        } else{
            return false;
        }
    }

    /**
     * 
     * 
     * @return bool
     */
    public function invalidItemName($name){
        
        if(substr($name, 0, 3) != '▲'){
            $name = '▲'.$name;
        }
        $item = Irunaitem::where('name', $name)->first();
        if($item){
            if($item->category == 'AlCrystas'){
                return false;
            } else{
                return true;
            }
        } else{
            return true;
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
