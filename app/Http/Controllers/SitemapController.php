<?php

namespace App\Http\Controllers;

use App\Ai;
use Illuminate\Http\Request;
use App\Equipment;
use App\Items;
use App\Relic;
use App\Xtal;


class SitemapController extends Controller
{
    public function index(){
        $equipment = Equipment::all();
        $crystas = Xtal::all();
        $material = Items::all();
        $alCrystas = Ai::all();
        $relicCrystas = Relic::all();
        
        return response()->view('sitemap.index', [
            'equipment' => $equipment, 
            'crystas' => $crystas,
            'material' => $material,
            'alCrystas' => $alCrystas,
            'relicCrystas' => $relicCrystas,
            ])->header('Content-Type', 'application/xml');
    }

        //SitemapGenerator::create('https://irunastall.com')->writeToFile(public_path(''));
    
}
