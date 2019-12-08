<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Irunaitem;
use Illuminate\Contracts\Validation\Validator;

class StoreIrunaRelic extends FormRequest
{

    const Category = 'RelicCrystas';
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
            'quantity' => 'required|integer|min:1|max:9999',
            'price' => 'required|alpha_num|min:1|max:12'
        ];
    }

    public function messages(){
        return [
            'price.max' => 'The price cannot be greater than 999,999,999,999'
        ];
    }

    public function withValidator(Validator $validator){
        $validator->after(function($validator){
            $relic = $this->request->get('name');
            if($this->invalidRelicName($relic)){
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


    public function invalidRelicName($relic){
        if(substr($relic, 0, 3) != '□'){
            $relic = '□'.$relic;
        }
        $item = Irunaitem::where('name', $relic)->first();
        if($item){
            if($item->category == StoreIrunaRelic::Category){
                return false;
            } else{
                return true;
            }
        }else{
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
