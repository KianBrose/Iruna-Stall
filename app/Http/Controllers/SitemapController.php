<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SitemapController extends Controller
{
    public function index(){
        return response()->view('sitemap.index')->header('Content-Type', 'application/xml');
    }

        //SitemapGenerator::create('https://irunastall.com')->writeToFile(public_path(''));
    
}
