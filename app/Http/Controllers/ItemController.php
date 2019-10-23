<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use App\Items;
use App\Xtal;
use Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\Searchable\Search;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    public function createAi(Request $request){
        $request->validate([
            'name' => 'required|alpha',
            'color' => 'required|alpha',
            'price' => 'required|integer|min:1',
            'quantity' => 'required||max:99|min:1'
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
            Alert::toast('You have previously entered the wrong format', 'warning');
            return redirect('/additem');
        }

        $ai->routes = "item/ai/{$idTobeUsed}";
        $ai->owner_id = Auth::user()->user_id;

        // check quantity
    
        $ai->quantity = request('quantity');
           

        // check price
        $ai->price = request('price');

        $ai->contact = request('contact');
        $ai->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
        
       
    }

    public function createEquip(Request $request){
        $idTobeUsed = $this->generateID(8);
        $equip = new Equipment();

        $request->validate([
            'name' => 'required|alpha',
            'atk' => 'required|max:400|integer|min:0',
            'def' => 'required|max:70|integer|min:0',
            'type' => 'required|alpha',
            'slot1' => 'required',
            'slot2' => 'required',
            'refinement' => 'required|integer|max:9|min:0',
            'price' => 'required|integer|min:0',
        ]);
        $equip->name = request('name');
        $equip->item_id = $idTobeUsed;
        $equip->owner_id = Auth::user()->user_id;

        // handle type input
        if($this->validEquipmentType(request('type'))){
            $equip->type = request('type');
        }
        else{
            Alert::toast('You have previously entered the wrong input', 'warning');
            return redirect('/additem');
        }    

        // check atk
        if(request('atk') > 400){
            $equip->atk = 400;
        }
        else{
            $equip->atk = request('atk');
        }

        // check def
        if(request('def') > 70){
            $equip->def = 70;
        }
        else{
            $equip->def = request('def');
        }
        // check price
        if($this->checkValidNumber(request('price'))){
            $equip->price = request('price');
        }
        else{
            $this->showWarningMessage();
        }
        if(request('equipslotamount') > 9){
            $slot = 9;
            $equip->slots = $slot;
        }
        else{
            $equip->slots = request('equipslotamount');
        }

        $equip->slot1 = request('slot1');
        $equip->slot2 = request('slot2');
        $equip->ability = request('ability');
        $equip->ability_level = request('ability_level');
        $equip->refinement = request('refinement');
        $equip->routes = "item/equip/{$idTobeUsed}";
        $equip->contact = request('contact');
        $equip->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
        
    }

    public function createItem(Request $request){
        $request->validate([
            'name' => 'required|alpha',
            'quantity' => 'required|integer|max:99',
            'price' => 'required|integer'
        ]);
        $items = new Items();
        $item_id = $this->generateID(12);
        $items->owner_id = Auth::user()->user_id;
        $items->name = request('name');
        $items->price = request('price');
        $items->quantity = request('quantity');
        $items->routes = "item/items/{$item_id}";
        $items->item_id = $item_id;
        $items->contact = auth()->user()->name;
        $items->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');

    }

    public function createXtal(Request $request){
        $request->validate([
            'name' => 'required|alpha',
            'quantity' => 'required|integer|max:99',
            'price' => 'required|integer'
        ]);
        $xtal = new Xtal();
        $item_id = $this->generateID(7);
        $xtal->name = request('name');
        $xtal->owner_id = Auth::user()->user_id;
        $xtal->price = request('price');
        $xtal->quantity = request('quantity');
        $xtal->routes = "item/xtal/{$item_id}";
        $xtal->item_id = $item_id;
        $xtal->contact = auth()->user()->name;
        $xtal->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
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
        if(Ai::where('item_id', $id)->first() || Equipment::where('item_id', $id)->first() || Items::where('item_id', $id)->first() || Xtal::where('item_id', $id)->first()){
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
        if($request->isMethod('POST')){
            $input = $request->input('search');
            $aiSearch = Ai::where('name', 'LIKE', "%{$input}%")->get();
            $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->get();
            $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->get();
            $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->get();

            return view('search', compact('aiSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input'));
        }
        else{
        }
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

    public function validAbiliyName($abilityName){
        $ability = array('gentleness', 'provoke', "magic", "mp cost", "intelligent", "strength", "agility", 
        "evasion", "fixed melee", "fixed magic", "rate cut", "melee defense", "magic defense", "dexterity", "critical",
        "attack", "quick cool", "quick use", "wind blessing", "earth blessing", "fire blessing", "water blessing", "striver");
        if(in_array($abilityName, $ability)){
            return true;
        }
        else{
            return false;
        }
    }

    public function validEquipmentType($equipment){
        $equip = array('Weapon', 'Body', 'Additional', 'Special');
        if(in_array($equipment, $equip)){
            return true;
        }
        else{
            return false;
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

    public function showWarningMessage(){
        Alert::toast('You have previously entered the wrong input', 'warning');
        return redirect('/additem');
    }



}
