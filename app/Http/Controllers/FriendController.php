<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
    public function add($id){
        if(Auth::user()->friends()->where('friend_id', $id)->get()){
            return redirect()->back();
        } 
        else{
            Auth::user()->friends()->attach([$id]);
            return redirect()->back();
        }
       
        
    }
}
