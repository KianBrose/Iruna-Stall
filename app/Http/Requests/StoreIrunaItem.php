<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Irunaitem;
use Auth;
class StoreIrunaItem extends FormRequest
{
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
            if($this->invalidItemName($name)){
                $validator->errors()->add('nameError', 'Please check your spelling again');
                $validator->errors()->add('mainError', 'Please check your previous submission, something went wrong');
            } 
        });
    }

    public function invalidItemName($name){
        $item = Irunaitem::where('name', $name)->first();
        if($item){
            return false;
        } else{
            return true;
        }
    }
}
