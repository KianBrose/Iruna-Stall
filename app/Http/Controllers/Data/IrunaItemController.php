<?php

namespace App\Http\Controllers\Data;

use App\Ai;
use App\Equipment;
use App\Http\Controllers\Controller;
use App\Items;
use App\Relic;
use Illuminate\Http\Request;
use App\User;
use App\Xtal;

class IrunaItemController extends Controller
    {
        public function ItemStatistic(){
            $xtalCollection = Xtal::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as price')->limit(10)->get();
            $EquipmentCollection = Equipment::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as price')->limit(10)->get();
            $materialCollection = Items::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as price')->limit(10)->get();
            $relicCollection = Relic::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as price')->limit(10)->get();
            $alCrystasCollection = Ai::groupBy('name')->selectRaw('count(*) as total, name, round(avg(price)) as price')->limit(10)->get();

            $equip = collect($EquipmentCollection)->sortBy('total')->reverse()->toArray();
            $xtal = collect($xtalCollection)->sortBy('total')->reverse()->toArray();
            $material = collect($materialCollection)->sortBy('total')->reverse()->toArray();
            $relic = collect($relicCollection)->sortBy('total')->reverse()->toArray();
            $alCrystas = collect($alCrystasCollection)->sortBy('total')->reverse()->toArray();
            //$xtalPrice = Xtal::groupBy('name')->selectRaw('avg(price) as average')->get();

            return [$xtal, $equip, $material, $relic, $alCrystas];
        }
    }

?>