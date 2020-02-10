<?php
namespace App\Http\Controllers\Wiki;

use App\Message;
use App\Http\Controllers\Controller;
use Auth;

class WikiController extends Controller
{
    public function __construct()
    {
        $this->middleware('editor');
    }

    /**
     * 
     * Render add wiki page
     */
    public function showAddWiki()
    {
        if(Auth::check()){
            $message = Message::with('user')->groupBy('user_id')->where('receiver_id', auth()->user()->id)->where('read', false)->get();
            return view('wiki.additemwiki', compact('message'));
        }
        return view('wiki.additemwiki');
    }
}

?>