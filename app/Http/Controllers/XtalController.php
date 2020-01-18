<?php

namespace App\Http\Controllers;
use App\Xtal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreIrunaItem;

use App\Traits\PriceTrait;

class XtalController extends Controller
{
    use PriceTrait;

    public function update($id){
        if(Auth::check()){
            $item = Xtal::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                $item->price = $this->updatePrice(request('price'));
                $item->quantity = $this->updateQuantity(request('quantity'));
                $item->save();
                Alert::toast('Successfully edited an item', 'success');
                return redirect()->back();
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
                return redirect()->back();
            }

        }
    }

    
}
