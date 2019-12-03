<?php

namespace App\Http\Controllers;

use App\User;
use App\Ai;
use Illuminate\Http\Request;
use App\Equipment;
use App\Items;
use App\Xtal;
use App\Relic;
use Auth;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * 
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('account');
    }

    public function getUserId($id){
        $user = User::where('user_id', $id)->firstOrFail();
        if($user != null){
            $equipSearch = Equipment::where('owner_id', $id)->get();
            $xtalSearch = Xtal::where('owner_id', $id)->get();
            $itemSearch = Items::where('owner_id', $id)->get();
            $aiSearch = Ai::where('owner_id', $id)->get();
            return view('seller', compact('user', 'equipSearch', 'xtalSearch', 'itemSearch', 'aiSearch'));
        }
        
       
    }
    
    public function view(){
        $Ai = new Ai();
        $Equip = new Equipment();
        $Item = new Items();
        $alitem = $Ai->getAiItem();
        $equipitem = $Equip->getEquipmentItems();
        $item = $Item->getItems();
        $xtal = Xtal::where('owner_id', Auth::user()->user_id)->get();
        $relic = Relic::where('owner_id', Auth::user()->user_id)->get();
        return view('viewitem', compact('alitem', 'equipitem', 'item', 'xtal', 'relic'));
    }

    public function show(){
        if(Auth::check()){
            return view('accsettings');
        } else{
            return redirect()->route('login');
        }
       
    }

    public function addDiscordLink(){
        $discordName = request('name');
        if(preg_match('.*#\d{4}', $discordName)){
            auth()->user()->discord = $discordName;
        }
    }
}
