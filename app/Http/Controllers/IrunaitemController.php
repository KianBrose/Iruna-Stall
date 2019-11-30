<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irunaitem;


class IrunaitemController extends Controller
{
    const Equipment = array('Claws, Staff, Swords, Throws, Bows, Armors, Additional, Special');
    const Xtal = 'Crystas';
    const Relic = 'RelicCrystas';
    const AL = 'Alcrystas';
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function add(Request $request){
        $type = request('type');
        $irunaitem = new Irunaitem();
        if(in_array($type, IrunaitemController::Equipment)){
            $irunaitem->category = request('type');
            $irunaitem->name = request('name');
            $irunaitem->save();
        }

        if($type == IrunaitemController::Xtal){
            $irunaitem->category = 'Crystas';
            $irunaitem->name = '◇'.request('name');
            $irunaitem->save();
        }

        if($type == IrunaitemController::Relic){
            $irunaitem->category = 'RelicCrystas';
            $irunaitem->name = '□'.request('name');
            $irunaitem->save();
        }

        if($type == IrunaitemController::AL){
            $irunaitem->category = 'AlCrystas';
            $irunaitem->name = '▲'.request('name');
            $irunaitem->save();
        }
        else{
            $irunaitem->category = request('type');
            $irunaitem->name = request('name');
            $irunaitem->save();
        }



        
    }
}
