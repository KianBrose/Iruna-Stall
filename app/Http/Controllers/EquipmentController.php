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
                $xtal1 = request('slot1');
                $xtal2 = request('slot2');
                if($this->validNumber(request('price'))){
                    $item->price = request('price');
                }

                if($this->validNumber(request('atk'))){
                    if((int)request('atk') < 400 && (int)request('atk') > 0){
                        $item->atk = request('atk');
                    }
                }

                if($this->validNumber(request('def'))){
                    if((int)request('atk') < 70 && (int)request('def') > 0){
                        $item->def = request('def');
                    }
                }

                if($xtal1 == null or $xtal1 == ""){
                    $item->slot1 = null;
                }
                else{
                    if(substr($xtal1, 0, 3) != '◇'){
                        $xtalname1 = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i', 
                        function($matches) {
                            return strtoupper($matches[0]);
                        }, ucwords(strtolower($xtal1)));
                        $xtal1 = '◇'.$xtalname1;
                    }
                    $slot1 = Irunaitem::getItem($xtal1)->first();
                


                    if($slot1) {
                        if($slot1->category == 'Crystas'){
                            $item->slot1 = $slot1->name;
                        }
                       
                    }
                }

                
                if($xtal2 == null or $xtal2 == ""){
                    $item->slot2 = null;
                }
                else
                {
                    if(substr($xtal2, 0, 3) != '◇'){
                        $xtalname2 = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i', 
                        function($matches) {
                            return strtoupper($matches[0]);
                        }, ucwords(strtolower($xtal2)));
                        $xtal2 = '◇'.$xtalname2;
                    }
                    $slot2 = Irunaitem::getItem($xtal2)->first();
    
                    if($slot2) {
                        if($slot2->category == 'Crystas'){
    
                            $item->slot2 = $slot2->name;
                        }
                        
                    }
                }

               

                if(request('ability') == null or request('ability') == ""){
                   $item->ability = null;
                } else{
                    $validAbi = Ability::where('type', request('ability'))->first();
                    if($validAbi){
                        $item->ability = $validAbi->type;

                    }
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
