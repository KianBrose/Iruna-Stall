<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Friend;
use App\User;

class FriendController extends Controller
{
    public function add($id){
        if(User::where('id', $id)->exists()){
            $user = Auth::user()->friendsOfMine()->merge(Auth::user()->friendsOf());
            foreach($user as $friend){
                if($friend->id == $id){
                    return redirect()->back();
                }
            }
            $friends = new Friend();
            $friends->user_id = auth()->user()->id;
            $friends->friend_id = $id;
            $friends->save();
            
            return redirect('/private');
        }
        else{
            abort(404);
        }
    }

    public function acceptMessageRequest($id){

    }

}
