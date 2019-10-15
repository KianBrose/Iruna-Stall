<?php

namespace App\Http\Controllers;

use App\User;
use App\Ai;
use Illuminate\Http\Request;
use App\Equipment;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        
        return view('user', compact('user'));
    }
    
    public function view(){
        $aiitem = Ai::where('owner_id', auth()->id())->get();
        $equipitem = Equipment::where('owner_id', auth()->id())->get();
        return view('viewitem', compact('aiitem', 'equipitem'));
    }
}
