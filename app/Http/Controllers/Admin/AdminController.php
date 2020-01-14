<?php
namespace App\Http\Controllers\Admin;

use App\Ai;
use App\Equipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Irunaitem;
use App\Items;
use App\Relic;
use App\User;
use App\Xtal;
use App\Http\Controllers\IrunaitemController;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $users = User::all();
        $items = Equipment::all()->count() + Items::all()->count() + Ai::all()->count() + Xtal::all()->count() + Relic::all()->count();
        $usersVerified = User::whereNotNull('email_verified_at');
        return view('admin.index', compact('users', 'items', 'usersVerified'));
    }

    public function viewIrunaItem(){
        $irunaitem = Irunaitem::paginate(100);
        return view('admin.irunaitem', compact('irunaitem'));
    }

    public function allItems()
    {
        return Irunaitem::all();
    }

    public function addItem(){
        $type = request('category');


        $irunaitem = new Irunaitem();
        $irunaitem->timestamps = false;
        if(in_array($type, IrunaitemController::Equipment)){
            $irunaitem->category = request('category');
            $irunaitem->name = request('name');
            $irunaitem->save();
            return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);
        }

        if($type == 'Crystas'){
            //dd('◇'.request('name'));
            $irunaitem->category = 'Crystas';
            $irunaitem->name = '◇'.request('name');
            $irunaitem->save();
            return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);
        }

        if($type == IrunaitemController::Relic){
            $irunaitem->category = 'RelicCrystas';
            $irunaitem->name = '□'.request('name');
            $irunaitem->save();
            return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);
        }

        if($type == IrunaitemController::AL){
            $irunaitem->category = 'AlCrystas';
            $irunaitem->name = '▲'.request('name');
            $irunaitem->save();
            return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);
        }
        $irunaitem->category = request('category');
        $irunaitem->name = request('name');
        $irunaitem->save();
        return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);

    }

    public function editItem($id){
        $item = Irunaitem::findOrFail($id);
        if(request('name') != null){
            $item->name = request('name');
        }
        $item->timestamps = false;
        $item->category = request('category');
        $item->save();
        return redirect()->back()->withErrors(['success' => ['Successfully edited an item']]);
    }

    public function showItem($id){
        $item = Irunaitem::findOrFail($id);
        return view('admin.show', compact('item'));
    }

    public function searchItem(Request $request){
        $input = $request->get('search');
        $irunaitem = Irunaitem::where('name', 'LIKE', "%{$input}%")->paginate(100);
        return view('admin.irunaitem', compact('irunaitem'));
    }

    public function createItemView(){
        return view('admin.createitem');
    }

}


?>