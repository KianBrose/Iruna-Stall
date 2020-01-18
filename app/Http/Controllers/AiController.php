<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreIrunaItem;
use App\Traits\PriceTrait;

class AiController extends Controller
{
    use PriceTrait;
    
    public function show($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        return view('show', compact('item'));
    }
    
    public function edit($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        if($item->owner_id != Auth::user()->user_id){
            abort(404);
        }
        else{
            return view('item.ai', compact('item'));
        }
    }

    public function update($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                if($this->validColor(request('color'))){
                    $item->color = request('color');
                }
                $item->price = $this->updatePrice(request('price'));
                $item->quantity = $this->updateQuantity(request('quantity'));
                $item->save();

                Alert::toast('Successfully edited an item', 'success');
                return redirect()->back();
            }

        }
        else{
            abort(403);
        }
       
    }
    
    public function delete($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Ai::where('item_id', $id)->firstOrFail()->delete();
                //$aiitem = Ai::where('owner_id', auth()->id())->get();
                Alert::toast('You have deleted an item', 'warning');
                return redirect()->back();
            }

        }
    }

    public function validColor($color){
        if($color == 'Red' || $color == 'Blue' || $color == 'Green'){
            return true;
        }
        else{
            return false;
        }
    }
    
}
