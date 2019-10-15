<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AiController extends Controller
{
    public function show($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        return view('show', compact('item'));
    }
    
    public function edit($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        if($item->owner_id != Auth::user()->id){
            abort(403);
        }
        else{
            return view('item.ai', compact('item'));
        }
    }

    public function update($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->id){
                abort(403);
            }
            else{
                $item->name = request('name');
                $item->item_id = $id;
                $item->price = request('price');
                $item->color = request('color');
                $item->routes = "item/ai/{$id}";
                $item->owner_id = Auth::user()->id;
                $item->quantity = request('quantity');
                $item->contact = request('contact');
                $item->save();
                Alert::toast('Successfully edited an item', 'success');
                return view('account');
            }

        }
        else{
            abort(403);
        }
       
    }
    
    public function delete($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->id){
                abort(403);
            }
            else{
                Ai::where('item_id', $id)->firstOrFail()->delete();
                $aiitem = Ai::where('owner_id', auth()->id())->get();
                Alert::toast('You have deleted an item', 'warning');
                return view('viewitem', compact('aiitem'));
            }

        }
    }
    
}
