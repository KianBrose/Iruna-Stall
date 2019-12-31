<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xtal;
use App\Equipment;

class ItemViewController extends Controller
{
    public function getXtalItemId($id){
        $item = Xtal::where('item_id', $id)->firstOrFail();
        return view('item', compact('item'));
    }

    public function getEquipmentItemId($id){
        $item = Equipment::where('item_id', $id)->firstOrFail();
        return view('item', compact('item'));
    }
}
