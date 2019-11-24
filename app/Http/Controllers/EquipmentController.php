<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Http\Requests\StoreIrunaEquip;
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
                    if(request('atk') < 70 && request('def') > 0){
                        $item->atk = request('def');
                    }
                }
                $item->slots = request('slots');
                $item->slot1 = request('slot1');
                $item->slot2 = request('slot2');
                $item->ability = request('ability');
                $item->ability_level = request('ability_level');
                $item->refinement = request('refinement');
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
