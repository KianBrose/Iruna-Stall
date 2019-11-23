<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIrunaItem;
use App\Items;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class ItemsController extends Controller
{
    //
    public function update($id){
        if(Auth::check()){
            $item = Items::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(404);
            }
            else{
                
                if($this->validNumber(request('price'))){
                    $item->price = request('price');
                } 
                
                if($this->validNumber(request('quantity'))){
                    if(request('quantity') > 99){
                        $item->quantity = 99;
                    } else{
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
            $item = Items::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Items::where('item_id', $id)->firstOrFail()->delete();
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
