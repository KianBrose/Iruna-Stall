<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irunaitem;


class IrunaitemController extends Controller
{
    const Equipment = array('Claws, Staff, Swords, Throws, Bows, Armors, Additional, Special');
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function add(Request $request){
        $type = request('type');
        $irunaitem = new Irunaitem();
        if(in_array($irunaitem, IrunaitemController::Equipment)){
            $irunaitem->category = request('type');
            $irunaitem->name = request('name');
            $irunaitem->save();
        }
        
    }
}
