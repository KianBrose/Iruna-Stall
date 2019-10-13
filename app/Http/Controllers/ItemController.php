<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    public function createAi(){
        request()->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        $idTobeUsed = $this->generateID();
        $ai = new Ai();
        $ai->name = request('name');
        $ai->item_id = $idTobeUsed;
        $ai->price = request('price');
        $ai->color = request('color');
        $ai->routes = "item/ai/{$idTobeUsed}";
        $ai->owner_id = Auth::user()->id;
        $ai->quantity = request('quantity');
        $ai->contact = request('contact');
        $ai->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/account');
    }

    public function addItem(){
        return view('addItem');
    }

    public function generateID(){
        $length = 10;
        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomID = '';
        for ($i = 0; $i < $length; $i++){
            $randomID .= $characters[rand(0, $charactersLength - 1)];
        }
        return $this->checkID($randomID);
        

    }

    public function checkID($id){
        if(Ai::where('item_id', $id)->first()){
            $this->generateID();
        }
        else{
            return $id;
        }

    }
    public function showItem(){
        $item = Ai::all();

        return view('item', compact('item'));
    }
}
