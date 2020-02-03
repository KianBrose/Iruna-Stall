<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class WikiController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }
}

?>