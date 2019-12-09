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
                if(strlen($hashtags) != 0){
                    return $this->getTagNotation($arr, $input);
                }
                else{
                   
                    $alCount = Ai::where('name', 'LIKE', "%{$input}%")->get();
                    $equipCount = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
                    $itemCount = Items::where('name', 'LIKE', "%{$input}%")->get();
                    $xtalCount = Xtal::where('name', 'LIKE', "%{$input}%")->get();
                    $relicCount = Relic::where('name', 'LIKE', "%{$input}%")->get();
                    $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
                    $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'alPage');
                    $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'equipPage');
                    $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
                    $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
                    $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');
    
                    return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                }
               
            }
            
        }
        else{
            abort(404);
        }
    }

    private function searchEquipment($inputString){
        $input = $inputString;
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

    private function searchMaterial($input){
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        $equipCount = collect();
        $itemCount = $itemCount = Items::where('name', 'LIKE', "%{$input}%")->get();
        $xtalCount = collect();
        $relicCount = collect();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');
        $equipSearch = Equipment::where('name', 'LIKE', "%{$random}%")->orWhere('ability', 'LIKE', "%{$random}%")->orWhere('slot1', 'LIKE', "%{$random}%")->orWhere('slot2', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'equipPage');
        $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * search xtal type
     */

    private function searchXtal($input){
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        $equipCount = collect();
        $itemCount = collect();
        $xtalCount = Xtal::where('name', 'LIKE', "%{$input}%")->get();
        $relicCount = collect();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');
        $equipSearch = Equipment::where('name', 'LIKE', "%{$random}%")->orWhere('ability', 'LIKE', "%{$random}%")->orWhere('slot1', 'LIKE', "%{$random}%")->orWhere('slot2', 'LIKE', "%{$random}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'equipPage');
        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * search relic
     */
    private function searchRelic($input){
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        $equipCount = collect();
        $itemCount = collect();
        $xtalCount = collect();
        $relicCount = Relic::where('name', 'LIKE', "%{$input}%")->get();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');
        $equipSearch = Equipment::where('name', 'LIKE', "%{$random}%")->orWhere('ability', 'LIKE', "%{$random}%")->orWhere('slot1', 'LIKE', "%{$random}%")->orWhere('slot2', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'equipPage');
        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    private function searchAdditionalGear($inputString){
        $input = $inputString;
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        if($inputString == ""){
            $equipCount = Equipment::where('type', 'Additional')->get();
        }else{
            $equipCount = Equipment::where('type', 'Additional')->where('name', 'LIKE', "%{$inputString}%")->orWhere('ability', 'LIKE', "%{$inputString}%")->orWhere('slot1', 'LIKE', "%{$inputString}%")->orWhere('slot2', 'LIKE', "%{$inputString}%")->get();
        }
        
        $itemCount = collect();
        $xtalCount = collect();
        $relicCount = collect();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'alPage');

        if($inputString == ""){
            $equipSearch = Equipment::where('type', 'Additional')->paginate(10, ['*'], 'equipPage');
            
        }else{
            $equipSearch = Equipment::where('type', 'Additional')->where('name', 'LIKE', "%{$inputString}%")->orWhere('ability', 'LIKE', "%{$inputString}%")->orWhere('slot1', 'LIKE', "%{$inputString}%")->orWhere('slot2', 'LIKE', "%{$inputString}%")->paginate(10, ['*'], 'equipPage');
        }
        
        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    private function searchSpecial($inputString){
        $input = $inputString;
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        if($inputString == ""){
            $equipCount = Equipment::where('type', 'Special')->get();
        }else{
            $equipCount = Equipment::where('type', 'Special')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }
       
        $itemCount = collect();
        $xtalCount = collect();
        $relicCount = collect();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")
                    ->paginate(10, ['*'], 'alPage');
        if($inputString == ""){
            $equipSearch = Equipment::where('type', 'Special')->paginate(10, ['*'], 'equipPage');
        } else{
            $equipSearch = Equipment::where('type','Special')
            ->where('name', 'LIKE', "%{$input}%")
            ->orWhere('ability', 'LIKE', "%{$input}%")
            ->orWhere('slot1', 'LIKE', "%{$input}%")
            ->orWhere('slot2', 'LIKE', "%{$input}%")
            ->paginate(10, ['*'], 'equipPage');
        }
       

        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    private function searchWeapon($inputString){
        $input = $inputString;
        $random = 'dsfghdjkfdkfdlefrgffefr';
        $alCount = collect();
        if($inputString == ""){
            $equipCount = Equipment::where('type', 'Weapon')->get();
        }else{
            $equipCount = Equipment::where('type', 'Weapon')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }
       
        $itemCount = collect();
        $xtalCount = collect();
        $relicCount = collect();
        $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
        $alSearch = Ai::where('name', 'LIKE', "%{$random}%")
                    ->paginate(10, ['*'], 'alPage');
        if($inputString == ""){
            $equipSearch = Equipment::where('type', 'Weapon')->paginate(10, ['*'], 'equipPage');
        } else{
            $equipSearch = Equipment::where('type','Weapon')
            ->where('name', 'LIKE', "%{$input}%")
            ->orWhere('ability', 'LIKE', "%{$input}%")
            ->orWhere('slot1', 'LIKE', "%{$input}%")
            ->orWhere('slot2', 'LIKE', "%{$input}%")
            ->paginate(10, ['*'], 'equipPage');
        }
       

        $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
        $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    private function getTagNotation($arr, $input){
        if(strtolower($arr) == 'equipment' || strtolower($arr) == 'equip'){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchEquipment($input);
           
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
            $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'alPage');
            $equipSearch = Equipment::where('name', 'LIKE', "%{$random}%")->orWhere('ability', 'LIKE', "%{$random}%")->orWhere('slot1', 'LIKE', "%{$random}%")->orWhere('slot2', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'equipPage');
            $itemSearch = Items::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'itemPage');
            $xtalSearch = Xtal::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'xtalPage');
            $relicSearch = Relic::where('name', 'LIKE', "%{$random}%")->paginate(10, ['*'], 'relicPage');
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }

        else if(strtolower($arr) == 'items' || strtolower($arr) == 'item' || strtolower($arr) == 'material'|| strtolower($arr) == 'materials'){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchMaterial($input);
            
        }

        else if(strtolower($arr) == 'xtal' || strtolower($arr) == 'crystas'){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchXtal($input);
            
        }

        else if(strtolower($arr) == 'relic' || strtolower($arr) == 'reliccrystas'){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchRelic($input);
        }

        else if(in_array(strtolower($arr), array('add', 'additional', 'gear', 'adds', 'gears'))){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchAdditionalGear($input);
        }
        
        else if(in_array(strtolower($arr), array('weapon', 'weap', 'weaps', 'weapons'))){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchWeapon($input);
        }

        else if(in_array(strtolower($arr), array('special', 'spec', 'specs', 'specials'))){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchSpecial($input);
        }
        
        else{
            $alCount = Ai::where('name', 'LIKE', "%{$input}%")->get();
            $equipCount = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
            $itemCount = Items::where('name', 'LIKE', "%{$input}%")->get();
            $xtalCount = Xtal::where('name', 'LIKE', "%{$input}%")->get();
            $relicCount = Relic::where('name', 'LIKE', "%{$input}%")->get();
            $totalCount = $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
            $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'alPage');
            $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'equipPage');
            $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
            $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
            $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');

            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
    }
}
