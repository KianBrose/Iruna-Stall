<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xtal;
use App\Equipment;
use App\Items;
use App\Ai;
use App\Relic;
use App\Message;
use Auth;

class ItemViewController extends Controller
{
    public function getXtalItemId($id){
        $item = Xtal::where('item_id', $id)->firstOrFail();
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('item', compact('item', 'message'));

        }else{
            return view('item', compact('item'));
        }
        
    }

    public function getEquipmentItemId($id){
        $item = Equipment::where('item_id', $id)->firstOrFail();
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('item', compact('item', 'message'));

        }else{
            return view('item', compact('item'));
        }
    }

    public function getMaterialItemId($id){
        $item = Items::where('item_id', $id)->firstOrFail();
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('item', compact('item', 'message'));

        }else{
            return view('item', compact('item'));
        }
    }

    public function getAlItemId($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('item', compact('item', 'message'));

        }else{
            return view('item', compact('item'));
        }
    }

    public function getRelicItemId($id){
        $item = Relic::where('item_id', $id)->firstOrFail();
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('item', compact('item', 'message'));

        }else{
            return view('item', compact('item'));
        }
    }
    
}
