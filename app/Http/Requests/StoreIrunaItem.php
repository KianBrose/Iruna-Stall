<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Irunaitem;
use Auth;
class StoreIrunaItem extends FormRequest
{

    const Type = array('Collectibles', 'Status', 'Strengthening', 'Recovery', 'Teleports', 'IslandItems', 'Chests');
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

    public function invalidItemName($name){
        $item = Irunaitem::where('name', $name)->first();
        if($item){
            if($this->validType($item)){
                return false;
            } else{
                return true;
            }
        } else{
            return true;
        }
        
    }

    public function validType($item){
        if(in_array($item->category, StoreIrunaItem::Type)){
            return true;
        } else{
            return false;
        }

    }
}
