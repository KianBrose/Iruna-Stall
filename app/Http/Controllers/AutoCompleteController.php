<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irunaitem;
use App\Ability;

class AutoCompleteController extends Controller
{
    public function search(Request $request){
        $search = $request->get('term');
        $result = Irunaitem::where('name', 'LIKE',  '%'. $search. '%')->get();
        return response()->json($result);
    }

    public function searchAbility(Request $request){
        $search = $request->get('term');
        $result = Ability::where('type', 'LIKE', '%'.$search.'%')->get();
        return response()->json($result);
    }
}
