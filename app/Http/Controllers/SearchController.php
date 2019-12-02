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
        if($request->isMethod('POST')){
            $input = $request->input('search');
            if(strlen($input) < 3){
                return redirect()->back()->withErrors(['searcherror' => trans('Please provide more details')]);
            }else{
                $alSearch = Ai::where('name', 'LIKE', "%{$input}%")->get();
                $equipSearch = Equipment::where('name', 'LIKE', "%{$input}%")->orWhere('ability', 'LIKE', "%{$input}%")->get();
                $itemSearch = Items::where('name', 'LIKE', "%{$input}%")->get();
                $xtalSearch = Xtal::where('name', 'LIKE', "%{$input}%")->get();
                $relicSearch = Relic::where('name', 'LIKE', "%{$input}%")->get();

                return view('search', compact('alSearch', 'equipSearch', 'itemSearch', 'xtalSearch', 'input', 'relicSearch'));
            }
            
        }
        else{
            abort(404);
        }
    }
}
