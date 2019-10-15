<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use Auth;
use Spatie\Searchable\Search;
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
        $idTobeUsed = $this->generateID(10);
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

    public function createEquip(){
        $idTobeUsed = $this->generateID(8);
        $equip = new Equipment();
        $equip->name = request('name');
        $equip->item_id = $idTobeUsed;
        $equip->owner_id = Auth::user()->id;
        $equip->type = request('type');
        $equip->atk = request('atk');
        $equip->def = request('def');
        $equip->price = request('price');
        $equip->slots = request('equipslotamount');
        $equip->slot1 = request('slot1');
        $equip->slot2 = request('slot2');
        $equip->ability = request('ability');
        $equip->ability_level = request('ability_level');
        $equip->refinement = request('refinement');
        $equip->routes = "item/equip/{$idTobeUsed}";
        $equip->contact = request('contact');
        $equip->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/account');
        
    }

    public function addItem(){
        return view('addItem');
    }

    public function generateID($length){
        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomID = '';
        for ($i = 0; $i < $length; $i++){
            $randomID .= $characters[rand(0, $charactersLength - 1)];
        }
        return $this->checkID($randomID, $length);
        

    }

    public function checkID($id, $length){
        if(Ai::where('item_id', $id)->first()){
            $this->generateID($length);
        }
        else{
            return $id;
        }

    }
    public function showItem(){
        $item = Ai::all();
        return view('item', compact('item'));
    }

    public function search(Request $request)
    {
        
        $searchResults = (new Search())
            ->registerModel(Ai::class, 'name')
            ->search($request->input('search'));

        return view('search', compact('searchResults'));
    }
}
