<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('welcome', compact('message'));
        }
        else{
            return view('welcome');
        }
       
    }

    public function about()
    {
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('about', compact('message'));
        }
        else{
            return view('about');
        }
    }
}
