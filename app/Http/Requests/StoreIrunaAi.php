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
            'price' => 'required|integer|min:1',
            'quantity' => 'required||max:99|min:1'
        ];
    }
    /**
     * 
     * 
     */
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
                $validator->errors()->add('mainError', 'Please check your previous submission, something went wrong');
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
    /**
     * 
     * 
     * @return bool
     */
    public function invalidItemName($name){
        $item = Irunaitem::where('name', $name)->first();
        if($item){
            return false;
        } else{
            return true;
        }
    }
}