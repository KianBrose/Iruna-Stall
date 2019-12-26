<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Friend;

class FriendController extends Controller
{
    public function add($id){
        $user = Friend::where('user_id', auth()->user()->id)->get();
        foreach($user as $friend){
            if($friend->id == $id){
                return redirect('/private');
            }
        }
        Auth::user()->friends()->attach($id);
        return redirect('private');
    }
}
