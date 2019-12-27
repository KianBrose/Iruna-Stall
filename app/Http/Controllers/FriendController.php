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
            $user = Friend::where('user_id', auth()->user()->id)->get();
            foreach($user as $friend){
                if($friend->id == $id){
                    return redirect('/private');
                }
            }
            
            Auth::user()->friends()->attach($id);
            return redirect('/private');
        }
        else{
            abort(404);
        }
    }

}
