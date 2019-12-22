<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FriendController extends Controller
{
    public function add($id){
        Auth::user()->friends()->attach([$id]);
        return redirect()->back();
    }
}
