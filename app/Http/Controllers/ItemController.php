<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\Searchable\Search;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    public function createAi(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        $idTobeUsed = $this->generateID(10);
        $ai = new Ai();
        $ai->name = request('name');
        $ai->item_id = $idTobeUsed;
        
        // check color 
        
        if(request('color') == 'Red' || request('color') == 'Blue' || request('color') == 'Green'){
            $ai->color = request('color');
        }
        else{
            Alert::toast('You have previously entered the wrong format');
            return redirect('/account');
        }

        $ai->routes = "item/ai/{$idTobeUsed}";
        $ai->owner_id = Auth::user()->id;

        // check quantity
        if($this->checkValidNumber(request('quantity'))){
            $ai->quantity = request('quantity');
        }
        else{
            $validator->errors()->add('field', 'Please only input number');
            Alert::toast('You have previously entered the wrong format qty', 'warning');
            return redirect('/account');
        }

        // check price
        if($this->checkValidNumber(request('price'))){
            $ai->price = request('price');
        }
        else{
            Alert::toast('You have previously entered the wrong format', 'warning');
            return redirect('/account');
        }

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

    public function checkValidNumber($number){
        $number = (string) $number;
        if(ctype_digit($number)){
            return true;
        }
        else{
            return false;
        }
        
    }
}
