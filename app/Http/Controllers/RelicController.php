<?php

namespace App\Http\Controllers;

use App\Relic;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreIrunaItem;
use App\Traits\PriceTrait;

class RelicController extends Controller
{
    use PriceTrait;

    public function update($id){
        if(Auth::check()){
            $item = Relic::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            } else{
                $item->price = $this->updatePrice(request('price'));
                $item->quantity = $this->updateQuantity(request(('quantity')));
                $item->save();
                Alert::toast('Successfully edited an item', 'success');
                return redirect()->back();
            }
        }
    }

    public function delete($id){
        if(Auth::check()){
            $item = Relic::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Relic::where('item_id', $id)->firstOrFail()->delete();
                Alert::toast('You have deleted an item', 'warning');
                return redirect('/viewitem');
            }

        }
    }


 
}
