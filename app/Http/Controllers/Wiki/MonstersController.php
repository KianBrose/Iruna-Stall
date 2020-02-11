<?php
namespace App\Http\Controllers\Wiki;

use App\Irunaitem;
use App\Http\Controllers\Controller;
use App\Message;

class MonstersController extends Controller
{
    public function __construct(){
        $this->middleware('editor');
    }

    public function create()
    {


    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}

?>