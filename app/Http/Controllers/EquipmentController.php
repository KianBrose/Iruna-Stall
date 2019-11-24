<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Http\Requests\StoreIrunaEquip;
use App\Irunaitem;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class EquipmentController extends Controller
{
    public function update($id, StoreIrunaEquip $request){
        
        if(Auth::check()){
            $item = Equipment::where('item_id', $id)->firstOrFail();
            
            if($item->owner_id != Auth::user()->user_id){
                abort(404);
            }
            else{
                if($this->validNumber(request('price'))){
                    $item->price = request('price');
                }

                if($this->validNumber(request('atk'))){
                    if(request('atk') < 400 && request('atk') > 0){
                        $item->atk = request('atk');
                    }
                }

                if($this->validNumber(request('def'))){
                    if((int)request('atk') < 70 && (int)request('def') > 0){
                        $item->atk = request('def');
                    }
                }
                $slot1 = Irunaitem::getItem(request('slot1'))->first();

                if($slot1) {
                    if($slot1->category == 'Crystas'){
                        $item->slot1 = $slot1->name;
                    }
                   
                }

                $slot2 = Irunaitem::getItem(request('slot2'))->first();

                if($slot2) {
                    if($slot2->category == 'Crystas'){
                        $item->slot2 = $slot2->name;
                    }
                    
                }

                $validAbi = Ability::where('type', request('ability'))->first();
                if($validAbi){
                    $item->ability = request('ability');
                }
                if($this->validNumber(request('ability_level'))){
                    if((int)request('ability_level') >= 1 && (int)request('ability_level') <=5){
                        $item->ability_level = request('ability_level');
                    }
                }
                if($this->validNumber(request('refinement'))){
                    if((int)request('refinement') >= 1 && (int)request('refinement') <= 9){
                        $item->refinement = request('refinement');
                    }
                        
                }
                $item->save();
                Alert::toast('successfully edited an item', 'success');
                return redirect('/viewitem');

            }
        }
    }
    public function delete($id){
        if(Auth::check()){
            $item = Equipment::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Equipment::where('item_id', $id)->firstOrFail()->delete();
                //$item = Ai::where('owner_id', auth()->id())->get();
                Alert::toast('You have deleted an item', 'warning');
                return redirect('/viewitem');
            }
        }
    }

    public function validNumber($number){
        $number = (string) $number;
        if(ctype_digit($number)){
            return true;
        }
        else{
            return false;
        }
        
    }
    
}
