<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Irunaitem;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function allItems()
    {
        return Irunaitem::all();
    }

    public function addItem(){
        $item = new Irunaitem;
        $item->name = request('name');
        $item->category = request('category');
        $item->save();
    }

    public function editItem($id){
        $item = Irunaitem::findOrFail($id);
        $item->name = request('name');
        $item->category = request('category');
        $item->save();
    }
}


?>