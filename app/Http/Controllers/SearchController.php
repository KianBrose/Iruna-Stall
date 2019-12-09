<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use App\Items;
use App\Relic;
use App\Xtal;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->isMethod('GET')){
            $input = $request->get('search');
            if(strlen($input) <= 2 && strlen($input) >= 1){
                return redirect()->back()->withErrors(['searcherror' => trans('Please provide more details')]);
            }else{
                preg_match_all('/@([^\s]+)/', $input, $matches);
                $hashtags = implode(',', $matches[1]);
                $arr = explode(',', $hashtags)[0];
                if(strtolower($arr) == 'equipment' || strtolower($arr) == 'equip'){
                    $inputString = preg_replace('/@([^\s]+)/', '', $input);
                    $input = trim($inputString);
                    $random = 'dsfghdjkfdkfdlefrgffefr';
                    $alCount = collect();
                    $equipCount = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
                    $itemCount = collect();
                    $xtalCount = collect();
                    $relicCount = collect();
                    $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
                    $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');
                    $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'equipPage');
                    $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
                    $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
                    $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
                    return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                }

                else if(strtolower($arr) == 'al' || strtolower($arr) == 'alcrystas'){
                    $inputString = preg_replace('/@([^\s]+)/', '', $input);
                    $input = trim($inputString);
                    $random = 'dsfghdjkfdkfdlefrgffefr';
                    $alCount = Ai::where('name', 'LIKE', "%{$input}%")->get();
                    $equipCount = collect();
                    $itemCount = collect();
                    $xtalCount = collect();
                    $relicCount = collect();
                    $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
                    $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'alPage');
                    $equipSearch = Equipment::where('name', 'LIKE', "%{$random}%")->orWhere('ability', 'LIKE', "%{$random}%")->orWhere('slot1', 'LIKE', "%{$random}%")->orWhere('slot2', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'equipPage');
                    $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
                    $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
                    $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
                    return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                }
                
                else{
                   
                    $alCount = Ai::where('name', 'LIKE', "%{$input}%")->get();
                    $equipCount = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
                    $itemCount = Items::where('name', 'LIKE', "%{$input}%")->get();
                    $xtalCount = Xtal::where('name', 'LIKE', "%{$input}%")->get();
                    $relicCount = Relic::where('name', 'LIKE', "%{$input}%")->get();
                    $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
                    $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'alPage');
                    $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'equipPage');
                    $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'itemPage');
                    $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'xtalPage');
                    $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'relicPage');
    
                    return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                }
               
            }
            
        }
        else{
            abort(404);
        }
    }

    public function searchEquipment($inputString){
        $input = $inputString;
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = Ai::where('name', 'LIKE', "%{$random}%")->get();
        $equipCount = Equipment::where('name', 'LIKE', "%{$inputString}%")->orWhere('ability', 'LIKE', "%{$inputString}%")->orWhere('slot1', 'LIKE', "%{$inputString}%")->orWhere('slot2', 'LIKE', "%{$inputString}%")->get();
        $itemCount = Items::where('name', 'LIKE', "%{$random}%")->get();
        $xtalCount = Xtal::where('name', 'LIKE', "%{$random}%")->get();
        $relicCount = Relic::where('name', 'LIKE', "%{$random}%")->get();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');
        $equipSearch = Equipment::where('name', 'LIKE', "%{$inputString}%")->orWhere('ability', 'LIKE', "%{$inputString}%")->orWhere('slot1', 'LIKE', "%{$inputString}%")->orWhere('slot2', 'LIKE', "%{$inputString}%")->paginate(10, ['*'], 'equipPage');
        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }
}
