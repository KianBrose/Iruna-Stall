<?php
namespace App\Http\Controllers\Wiki;

use App\Irunaitem;
use App\Http\Controllers\Controller;
use App\Message;

class UpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }

    /**
     * 
     * 
     * 
     */
    public function create()
    {
        if($this->exists(request('name'))) {
            return $this->updateExistItems(request('name'), request('category'), request('description'), request('monster'));
        } else {
            return $this->makeItems(request('name'), request('category'), request('description'), request('monster'));
        }
    }

    /**
     * 
     * Return True if item's name exists in database
     * 
     * @param string $name
     * 
     * @return bool
     * 
     */
    private function exists($name)
    {
        $irunaItems = Irunaitem::all();
        foreach($irunaItems as $irunaItem){
            if(in_array($irunaItem->name, ['◇'.$name, '▲'.$name, '□'.$name, $name])){
                return True;
            }
        }
        return False;
    }

    /**
     * 
     * Create new iruna item
     * 
     * @param string $name
     * @param string $category
     * @param string $description
     * 
     * @return void
     */
    private function makeItems($name, $category, $description, $monster)
    {
        Irunaitem::create([
            'name' => $this->convert($name, $category),
            'category' => $category,
            'description' => $description,
            'monster' => $monster
        ]);
    }

    /**
     * 
     * update existing item
     * 
     * @param string $name
     * @param string $category
     * @param string $description
     * 
     * @return void
     * 
     */
    private function updateExistItems($name, $category, $description, $monster)
    {
        $item = Irunaitem::where('name', $name)->first();

        $item->name = $this->convert($name, $category);
        $item->category = $category;
        $item->description = $description;
        $item->monster = $monster;
        $item->save();

    }

    /**
     * 
     * Convert name where appropriate
     * 
     * @param string $name
     * @param string $category
     * 
     * @return string
     */
    private function convert($name, $category)
    {
        switch (strtolower($category)) {
            case 'crystas':
                return $this->convertCrystas($name);
                break;

            case 'relic':
                return $this->convertRelicCrystas($name);
                break;

            case 'alcrystas':
                return $this->convertAlcrystas($name);
                break;
        }
    }

    /**
     * 
     * Return crystas format name 
     * 
     * @param string $name
     * 
     * @return string
     * 
     */
    private function convertCrystas($name)
    {
        return '◇'.$name;
    }

    /**
     * 
     * Return alcrystas format name 
     * 
     * @param string $name
     * 
     * @return string
     * 
     */
    private function convertALCrystas($name)
    {
        return '▲'.$name;
    }

    /**
     * 
     * Return relic format name 
     * 
     * @param string $name
     * 
     * @return string
     * 
     */
    private function convertRelicCrystas($name)
    {
        return '□'.$name;
    }
}

?>