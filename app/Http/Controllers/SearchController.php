<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use App\Equipment;
use App\Items;
use App\Relic;
use App\Xtal;
use Auth;
use App\Message;

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
                   
                    
                    $totalCount = $this->countSearchItems($input);
                    $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'alPage');
                    $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'equipPage');
                    $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
                    $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
                    $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');


                    if(Auth::check()){
                        $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
                        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
                    }else{
                        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                    }
                    //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
                }
               
            }
            
        }
        else{
            abort(404);
        }
    }

    /**
     * 
     * @param string $input
     */
    private function searchEquipment($input){
        $equipCount = Equipment::searchByName($input)->searchByAbility($input)->searchBySlot($input)->get();
        $totalCount = $equipCount->count();
        $alSearch = $itemSearch = $xtalSearch = $relicSearch = collect();
        $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'equipPage');

        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
    }

    /**
     * 
     * @param string $input
     */
    private function searchMaterial($input){
        $itemCount = Items::searchByName($input)->get();
        $totalCount = $itemCount->count();
        $alSearch = $equipSearch = $xtalSearch = $relicSearch = collect();
        $itemSearch = Items::searchByName($input)->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');

        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
        //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * 
     * @param string $input
     */
    private function searchXtal($input){
        $xtalCount = Xtal::where('name', 'LIKE', "%{$input}%")->get();
        $totalCount = $xtalCount->count();
        $alSearch = $equipSearch = $itemSearch = $relicSearch = collect();
        $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');


        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }

        
    }

    /**
     * 
     * @param string $input
     */
    private function searchRelic($input){
        $relicCount = Relic::where('name', 'LIKE', "%{$input}%")->get();
        $totalCount = $relicCount->count();
        $alSearch = $equipSearch = $itemSearch = $xtalSearch = collect();
        $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');
        return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }


    /**
     * 
     * @param string $input
     */
    private function searchAdditionalGear($input){
        if($input == ""){
            $equipCount = Equipment::searchByType('Additional')->get();
        }else{
            $equipCount = Equipment::searchByType('Additional')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }
        
        $totalCount = $equipCount->count();
        $alSearch = $itemSearch = $xtalSearch = $relicSearch = collect();

        if($input == ""){
            $equipSearch = Equipment::searchByType('Additional')->paginate(10, ['*'], 'equipPage');
            
        }else{
            $equipSearch = Equipment::searchByType('Additional')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->paginate(10, ['*'], 'equipPage');
        }

        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
        //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * 
     * @param string $input
     */
    private function searchSpecial($input){
        if($input == ""){
            $equipCount = Equipment::where('type', 'Special')->get();
        }else{
            $equipCount = Equipment::where('type', 'Special')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }

        $totalCount = $equipCount->count();
        $alSearch = $relicSearch = $itemSearch = $xtalSearch = collect();

        if($input == ""){
            $equipSearch = Equipment::where('type', 'Special')->paginate(10, ['*'], 'equipPage');
        } else{
            $equipSearch = Equipment::where('type','Special')
            ->where('name', 'LIKE', "%{$input}%")
            ->orWhere('ability', 'LIKE', "%{$input}%")
            ->orWhere('slot1', 'LIKE', "%{$input}%")
            ->orWhere('slot2', 'LIKE', "%{$input}%")
            ->paginate(10, ['*'], 'equipPage');
        }

        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
        //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * 
     * @param string $input
     */
    private function searchArmor($input){
        if($input == ""){
            $equipCount = Equipment::where('type', 'Body')->get();
        }else{
            $equipCount = Equipment::where('type', 'Body')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }
        $totalCount = $equipCount->count();
        $alSearch = $relicSearch = $itemSearch = $xtalSearch = collect();
        if($input == ""){
            $equipSearch = Equipment::where('type', 'Body')->paginate(10, ['*'], 'equipPage');
        } else{
            $equipSearch = Equipment::where('type','Body')
            ->where('name', 'LIKE', "%{$input}%")
            ->orWhere('ability', 'LIKE', "%{$input}%")
            ->orWhere('slot1', 'LIKE', "%{$input}%")
            ->orWhere('slot2', 'LIKE', "%{$input}%")
            ->paginate(10, ['*'], 'equipPage');
        }
       
        
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
        //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
    }

    /**
     * 
     * @param string $input
     */
    private function searchWeapon($inputString){
        $input = $inputString;
        $random = 'dsfghdjkfdkfdlefrgffefr';
        if($inputString == ""){
            $equipCount = Equipment::where('type', 'Weapon')->get();
        }else{
            $equipCount = Equipment::where('type', 'Weapon')->where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->get();
        }
       
        $totalCount = $equipCount->count();

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
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
        }else{
            return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
        //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
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
            if(Auth::check()){
                $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
                return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
            }else{
                return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
            }
            //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
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

        else if(in_array(strtolower($arr), array('armors', 'armor', 'body', 'bodies'))){
            $inputString = preg_replace('/@([^\s]+)/', '', $input);
            $input = trim($inputString);
            return $this->searchArmor($input);
        }

        else{
            
            $totalCount = $this->countSearchItems($input);
            $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'alPage');
            $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->orWhere('slot1', 'LIKE', "%{$input}%")->orWhere('slot2', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'equipPage');
            $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'itemPage');
            $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'xtalPage');
            $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->orderBy('created_at', 'desc')->paginate(10, ['*'], 'relicPage');

            if(Auth::check()){
                $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
                return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount', 'message'));
            }else{
                return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
            }
            //return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch', 'totalCount'));
        }
    }

    private function countSearchItems($item)
    {
        $alCount = Ai::searchByName($item)->get();
        $equipCount = Equipment::searchByName($item)->searchByAbility($item)->searchBySlot($item)->get();
        $itemCount = Items::searchByName($item)->get();
        $xtalCount = Xtal::searchByName($item)->get();
        $relicCount = Relic::searchByName($item)->get();


        return $alCount->count() + $equipCount->count() + $relicCount->count() + $xtalCount->count() + $itemCount->count();
    }
}
