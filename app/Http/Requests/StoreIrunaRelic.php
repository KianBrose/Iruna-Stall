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
            'quantity' => 'required|integer|min:0|max:99',
            'price' => 'required|integer|min:0'
        ];
    }
    public function withValidator(Validator $validator){
        $validator->after(function($validator){
            $relic = $this->request->get('name');
            if($this->invalidRelicName($relic)){
                $validator->error()->add('nameError', 'The name does not seem right');
                $validator->error()->add('mainError', 'Please check your previous submission, something went wrong');
            }
        });
    }

    public function invalidRelicName($relic){
        $item = Irunaitem::where('name', $relic)->first();
        if($item->category == StoreIrunaRelic::Category){
            return false;
        } else{
            return true;
        }
    }
}
