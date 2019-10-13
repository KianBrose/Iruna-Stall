<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;

class AiController extends Controller
{
    public function show($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        return view('show', compact('item'));
    }
}
