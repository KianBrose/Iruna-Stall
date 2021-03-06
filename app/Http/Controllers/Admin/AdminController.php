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


    /**
     * 
     * return all iruna item
     */
    public function allItems()
    {
        return Irunaitem::all();
    }

    /**
     * 
     * 
     */
    public function addItem(){
        $type = request('category');


        $irunaitem = new Irunaitem();
        $irunaitem->timestamps = false;
        if(in_array($type, IrunaitemController::Equipment)){
            $irunaitem->category = request('category');
            $irunaitem->name = request('name');
            $irunaitem->description = request('description');
            $irunaitem->save();
            return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);
        }

        if($type == 'Crystas'){
            return $this->createCrystas(request('name'), request('category'), request('description'));
        }

        if($type == IrunaitemController::Relic){
            return $this->createRelicCrystas(request('name'), request('category'), request('description'));
        }

        if($type == IrunaitemController::AL){
            return $this->createAlCrystas(request('name'), request('category'), request('description'));
        }

        $irunaitem->category = request('category');
        $irunaitem->name = request('name');
        $irunaitem->description = request('description');
        $irunaitem->save();
        return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);

    }


    /**
     * 
     * edit existing iruna item
     * 
     */
    public function editItem($id){
        $item = Irunaitem::findOrFail($id);
        if(request('name') != null){
            $item->name = request('name');
        }
        $item->category = request('category');
        $item->description = request('description');
        $item->save();
        return redirect()->back()->withErrors(['success' => ['Successfully edited an item']]);
    }


    /**
     * 
     * find and show iruna item from database
     */
    public function showItem($id){
        $item = Irunaitem::findOrFail($id);
        return view('admin.show', compact('item'));
    }


    /**
     * 
     * search for existing iruna item
     * 
     */
    public function searchItem(Request $request){
        $input = $request->get('search');
        $irunaitem = Irunaitem::where('name', 'LIKE', "%{$input}%")->paginate(100);
        return view('admin.irunaitem', compact('irunaitem'));
    }


    public function createItemView(){
        return view('admin.createitem');
    }

    /**
     * create crystas and save to database
     * 
     * @param string $name
     * @param string $category
     * @param string $description - optional
     * 
     */
    private function createCrystas($name, $category, $description=null)
    {
        Irunaitem::create([
            'name' => '◇'.$name,
            'category' => $category,
            'description' => $description

        ]);
        return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);


    }


    /**
     * create alcrystas and save to database
     * 
     * @param string $name
     * @param string $category
     * @param string $description - optional
     * 
     */
    private function createAlCrystas($name, $category, $description=null)
    {
        Irunaitem::create([
            'name' => '▲'.$name,
            'category' => $category,
            'description' => $description

        ]);
        return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);


    }


    /**
     * create relic crystas and save to database
     * 
     * @param string $name
     * @param string $category
     * @param string $description - optional
     * 
     */
    private function createRelicCrystas($name, $category, $description=null)
    {
        Irunaitem::create([
            'name' => '□'.$name,
            'category' => $category,
            'description' => $description

        ]);
        return redirect()->back()->withErrors(['success' => ['Successfully added an item']]);


    }



}


?>