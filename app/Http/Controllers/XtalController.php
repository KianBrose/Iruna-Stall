<?php

namespace App\Http\Controllers;
use App\Xtal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XtalController extends Controller
{
    public function update($id){
        if(Auth::check()){
            $item = Xtal::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                if($this->validNumber(request('price'))){
                    $item->price = request('price');
                }
                if($this->validNumber(request('quantity'))){
                    if(request('quantity') > 99){
                        $item->quantity = 99;
                    }
                    else{
                        $item->quantity = request('quantity');
                    }
                    
                }
                
                $item->save();

                Alert::toast('Successfully edited an item', 'success');
                return redirect('/viewitem');
            }
        }
    }

    public function delete($id){
        if(Auth::check()){
            $item = Xtal::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Xtal::where('item_id', $id)->firstOrFail()->delete();
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