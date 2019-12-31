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
use RealRashid\SweetAlert\Facades\Alert;

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
            $add = false;
            $friends = Auth::user()->friendsOfMine()->merge(Auth::user()->friendsOf());
            foreach($friends as $friend){
                if($friend->user_id == $id){
                    $add = true;
                }
            }
            $equipSearch = Equipment::where('owner_id', $id)->paginate(10, ['*'], 'equipPage');
            $xtalSearch = Xtal::where('owner_id', $id)->paginate(10, ['*'], 'xtalPage');
            $itemSearch = Items::where('owner_id', $id)->paginate(10, ['*'], 'itemPage');
            $alSearch = Ai::where('owner_id', $id)->paginate(10, ['*'], 'alPage');
            $relicSearch = Relic::where('owner_id', $id)->paginate(10, ['*'], 'relicPage');
            return view('seller', compact('user', 'equipSearch', 'xtalSearch', 'itemSearch', 'alSearch', 'relicSearch', 'add'));
        }
        
       
    }
    
    public function view(){
        $Ai = new Ai();
        $Equip = new Equipment();
        $Item = new Items();
        $alitem = $Ai->getAiItem();
        $equipitem = $Equip->getEquipmentItems();
        $item = $Item->getItems();
        $xtal = Xtal::where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'xtalPage');
        $relic = Relic::where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'relicPage');
        return view('viewitem', compact('alitem', 'equipitem', 'item', 'xtal', 'relic'));
    }

    public function show(){
            return view('accsettings');
        
       
    }

    public function addDiscordLink(){
        $discordName = request('name');
        $user = User::where('user_id', auth()->user()->user_id)->firstorFail();
        if(preg_match('/.*#\d{4}/', $discordName)){
            $user->discord = $discordName;
            $user->save();
            Alert::toast('Successfully updated discord link', 'success');
            return redirect('/account');
        } else{
            Alert::toast('It does not look like the correct discord tag', 'warning');
            return redirect('/account');
        }
    }

    public function addFacebookLink(){
        $facebookName = request('name');
        $user = User::where('user_id', auth()->user()->user_id)->firstOrFail();
        if(preg_match('/(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?/', $facebookName)){
            $user->facebook = $facebookName;
            $user->save();
            Alert::toast('Successfully updated facebook link', 'success');
            return redirect('/account');
        } else{
            Alert::toast('It does not look like a valid facebook link', 'warning');
            return redirect('/account');
        }
    }
}
