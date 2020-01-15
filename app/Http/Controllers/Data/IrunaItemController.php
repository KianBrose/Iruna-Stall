<?php

namespace App\Http\Controllers\Data;

use App\Equipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Xtal;

class IrunaItemController extends Controller
    {
        public function ItemStatistic(){
            $xtalCollection = Xtal::groupBy('name')->selectRaw('count(*) as total, name, price')->get();
            $EquipmentCollection = Equipment::groupBy('name')->selectRaw('count(*) as total, name, price')->get();
            $equip = collect($EquipmentCollection)->sortBy('total')->reverse()->toArray();
            $xtal = collect($xtalCollection)->sortBy('total')->reverse()->toArray();
            $xtalPrice = Xtal::groupBy('name')->selectRaw('avg(price) as average')->get();
            return [$xtal, $equip, collect($xtalPrice)->sortBy('average')->reverse()->toArray()];
        }
    }

?>