<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Irunaitem;
use Illuminate\Contracts\Validation\Validator;

class StoreIrunaXtal extends FormRequest
{
    const Category = "Crystas";
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
            'quantity' => 'required|integer|max:99',
            'price' => 'required|integer|min:0'
        ];
    }

    public function withValidator(Validator $validator){
        $validator->after(function($validator){
            $name = $this->request->get('name');
            if($this->invalidName($name)){
                $validator->errors()->add('mainError', 'Something went wrong, please check your form again');   
            }

            if($this->doNotHaveContactLink()){
                $validator->errors()->add('nameError', 'Please check your spelling again');
                $validator->errors()->add('mainError', 'You do not have contact link, go to /account to edit your contact information');
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


    public function invalidName($name){
        $item = Irunaitem::getItem($name)->first();
        if($item){
            if($item->category == StoreIrunaXtal::Category){
                return false;
            } else{
                return true;
            }
        } else {
            return true;
        }
    }
}
