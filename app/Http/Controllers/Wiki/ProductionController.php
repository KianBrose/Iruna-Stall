<?php

namespace App\Http\Controllers\Wiki;

use App\Http\Controllers\Controller;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function edit()
    {
        
    }
}

?>