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
        $item = new Irunaitem;
        $item->timestamps = false;
        $item->name = request('name');
        $item->category = request('category');
        $item->save();
        return redirect()->back();
    }

    public function editItem($id){
        $item = Irunaitem::findOrFail($id);
        if(request('name') != null){
            $item->name = request('name');
        }
        $item->timestamps = false;
        $item->category = request('category');
        $item->save();
        return redirect()->back();
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