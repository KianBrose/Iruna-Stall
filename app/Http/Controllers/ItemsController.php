<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Traits\PriceTrait;

class ItemsController extends Controller
{
    use PriceTrait;
    
    public function update($id){
        if(Auth::check()){
            $item = Items::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(404);
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
            $item = Items::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Items::where('item_id', $id)->firstOrFail()->delete();
                Alert::toast('You have deleted an item', 'warning');
                return redirect()->back();
            }

        }
    }

    


}
