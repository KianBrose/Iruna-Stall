<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use App\Items;
use App\Xtal;
use App\Relic;
use Auth;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreIrunaItem;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\StoreIrunaAi;
use App\Http\Requests\StoreIrunaEquip;
use App\Http\Requests\StoreIrunaRelic;
use App\Http\Requests\StoreIrunaXtal;

use App\Irunaitem;

use App\Traits\Price;
use App\Traits\ItemName;

class ItemController extends Controller
{
    use Price, ItemName;

    public function createAi(StoreIrunaAi $request){
        $request->validated();
        $idTobeUsed = $this->generateID(10);
        $al = new Ai();
        $al->name = $this->formatName(request('name'), '▲');
        $al->item_id = $idTobeUsed;
        $al->color = request('color');
        $al->routes = "item/ai/{$idTobeUsed}";
        $al->owner_id = Auth::user()->user_id;
        $al->quantity = request('quantity');
        $priceNumber = substr(request('price'), 0, -1);
        $priceDenote = strtolower(substr(request('price'), -1));
        $storedPrice = $this->convertPrice($priceDenote, $priceNumber);
        if($storedPrice == null){
            $al->price = request('price');
        }else{
            $al->price = $storedPrice;
        }
        $al->contact = auth()->user()->name;
        $al->save();
        Alert::toast('Successfully added an item', 'success');
        return redirect('/additem');
        
       
    }

    public function createEquip(StoreIrunaEquip $request){
        $request->validated();
        $idTobeUsed = $this->generateID(8);
        $equip = new Equipment();
        
        $equipname = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i', 
        function($matches) {
            return strtoupper($matches[0]);
        }, str_replace(['Of'], ['of'], ucwords(strtolower(request('name')))));
        $equip->name = $equipname;
        $equip->item_id = $idTobeUsed;
        $equip->owner_id = Auth::user()->user_id;
        $equip->type = request('type');
        $equip->atk = request('atk');
        $equip->def = request('def');
        $priceNumber = substr(request('price'), 0, -1);
        $priceDenote = strtolower(substr(request('price'), -1));
        $storedPrice = $this->convertPrice($priceDenote, $priceNumber);
        if($storedPrice == null){
            $equip->price = request('price');
        }else{
            $equip->price = $storedPrice;
        }
        $equip->slots = request('equipslotamount');
        $equip->slot1 = $this->formatName(request('slot1'), '◇');
        $equip->slot2 = $this->formatName(request('slot2'), '◇');
        $equip->ability = ucwords(request('ability'));
        $equip->ability_level = request('ability_level');
        $equip->refinement = request('refinement');
        $equip->routes = "item/equip/{$idTobeUsed}";
        $equip->contact = auth()->user()->name;
        $equip->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
        
    }

    public function createItem(StoreIrunaItem $request, Validator $validator){
        $request->validated();
        $items = new Items();
        $item_id = $this->generateID(12);
        $items->owner_id = Auth::user()->user_id;
        $items->name = $this->formatName(request('name'));
        $priceDenote = strtolower(substr(request('price'), -1));
        $priceNumber = substr(request('price'), 0, -1);
        $storedPrice = $this->convertPrice($priceDenote, $priceNumber);
        if($storedPrice == null){
            $items->price = request('price');
        }else{
            $items->price = $storedPrice;
        }
        $items->quantity = request('quantity');
        $items->routes = "item/items/{$item_id}";
        $items->item_id = $item_id;
        $items->contact = auth()->user()->name;
        $items->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');

    }

    public function createXtal(StoreIrunaXtal $request){
        $request->validated();
        $xtal = new Xtal();
        $item_id = $this->generateID(7);
        $xtal->name = $this->formatName(request('name'), '◇');
        $xtal->owner_id = Auth::user()->user_id;
        $priceNumber = substr(request('price'), 0, -1);
        $priceDenote = strtolower(substr(request('price'), -1));
        $storedPrice = $this->convertPrice($priceDenote, $priceNumber);

        if($storedPrice == null){
            $xtal->price = request('price');
        }else{
            $xtal->price = $storedPrice;
        }

        $xtal->quantity = request('quantity');
        $xtal->routes = "item/xtal/{$item_id}";
        $xtal->item_id = $item_id;
        $xtal->contact = auth()->user()->name;
        $xtal->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
    }

    public function createRelic(StoreIrunaRelic $request){
        $request->validated();
        $id = $this->generateID(8);
        $relic = new Relic(); 
        $relic->name = $this->formatName(request('name'), '□');
        $relic->quantity = request('quantity');
        $priceNumber = substr(request('price'), 0, -1);
        $priceDenote = strtolower(substr(request('price'), -1));
        $storedPrice = $this->convertPrice($priceDenote, $priceNumber);
        if($storedPrice == null){
            $relic->price = request('price');
        }else{
            $relic->price = $storedPrice;
        }
        $relic->owner_id = Auth::user()->user_id;
        $relic->item_id = $id;
        $relic->routes = "item/relic/{$id}";
        $relic->contact = auth()->user()->name;
        $relic->save();
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

    

    public function showWarningMessage(){
        Alert::toast('You have previously entered the wrong input', 'warning');
        return redirect('/additem');
    }

    public function covertRomanNumeric($string)
    {
        $string = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i', 
        function($matches) {
            return strtoupper($matches[0]);
        }, ucwords(strtolower($string)));
    }

    



}
