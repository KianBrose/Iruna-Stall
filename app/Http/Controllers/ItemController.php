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
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'quantity' => 'required||max:99'
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
            return redirect('/additem');
        }

        $ai->routes = "item/ai/{$idTobeUsed}";
        $ai->owner_id = Auth::user()->user_id;

        // check quantity
        if($this->checkValidNumber(request('quantity'))){
            if(request('quantity') > 99){
                $quantity = 99;
                $ai->quantity = $quantity;
            }
            else{
                $ai->quantity = request('quantity');
            }
            
        }
        else{
            Alert::toast('You have previously entered the wrong format quantity', 'warning');
            return redirect('/additem');
        }

        // check price
        if($this->checkValidNumber(request('price'))){
            $ai->price = request('price');
        }
        else{
            Alert::toast('You have previously entered the wrong format', 'warning');
            return redirect('/additem');
        }

        $ai->contact = request('contact');
        $ai->save();
        Alert::toast('Successfully added an item', 'success');

        return redirect('/additem');
        
       
    }

    public function createEquip(Request $request){
        $idTobeUsed = $this->generateID(8);
        $equip = new Equipment();

        $request->validate([
            'name' => 'required',
            'atk' => 'required||max:400',
            'def' => 'required||max:100',
            'type' => 'required',
            'price' => 'required',
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
        if($request->isMethod('POST')){
            $input = $request->input('search');
            $aiSearch = Ai::where('name', 'LIKE', "%{$input}%")->get();
            $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->get();

            return view('search', compact('aiSearch', 'equipSearch', 'input'));
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
}
