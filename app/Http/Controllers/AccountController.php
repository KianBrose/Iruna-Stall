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
use App\Message;

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
        $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
        return view('account', compact('message'));
    }

    public function getUserId($id){
        $user = User::where('user_id', $id)->firstOrFail();

        if($user != null){
            $add = false;
            if(Auth::check()){
                $friends = Auth::user()->friendsOfMine()->merge(Auth::user()->friendsOf());
                foreach($friends as $friend){
                    if($friend->user_id == $id){
                        $add = true;
                    }
                }
            }
            $equipSearch = $this->getUserEquipment($id);
            $xtalSearch = $this->getUserCrystas($id);
            $itemSearch = $this->getUserMaterial($id);
            $alSearch = $this->getUserAlCrystas($id);
            $relicSearch = $this->getUserRelicCrystas($id);
            
            if(Auth::check()){
                $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
                return view('seller', compact('user', 'equipSearch', 'xtalSearch', 'itemSearch', 'alSearch', 'relicSearch', 'add', 'message'));
            } else{
                return view('seller', compact('user', 'equipSearch', 'xtalSearch', 'itemSearch', 'alSearch', 'relicSearch', 'add'));
            }
            
        }
        
       
    }
    
    public function view(){
        $alitem = Ai::getItems();

        $equipitem = Equipment::getItems();

        $item = Items::getItems();

        $xtal = Xtal::getItems();

        $relic = Relic::getItems();

        $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
        return view('viewitem', compact('alitem', 'equipitem', 'item', 'xtal', 'relic', 'message'));
    }

    public function show(){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('accsettings', compact('message'));
        
       
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

    public function addFacebookLink()
    {
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

    /**
     * @private
     * @param int $id userID to search for
     * 
     */
    private function getUserEquipment($id)
    {
        return Equipment::where('owner_id', $id)->paginate(10, ['*'], 'equipPage');
    }

    /**
     * @private
     * @param int $id userID to search for
     * 
     */
    private function getUserCrystas($id)
    {
        return Xtal::where('owner_id', $id)->paginate(10, ['*'], 'xtalPage');
    }

    /**
     * @private
     * @param int $id userID to search for
     * 
     */
    private function getUserAlCrystas($id)
    {
        return Ai::where('owner_id', $id)->paginate(10, ['*'], 'alPage');
    }

    /**
     * @private
     * @param int $id userID to search for
     * 
     */
    private function getUserMaterial($id)
    {
        return Items::where('owner_id', $id)->paginate(10, ['*'], 'itemPage');
    }

    /**
     * @private
     * @param int $id userID to search for
     * 
     */
    private function getUserRelicCrystas($id)
    {
        return Relic::where('owner_id', $id)->paginate(10, ['*'], 'relicPage');
    }


}
