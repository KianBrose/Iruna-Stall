<?php

namespace App\Http\Controllers\Admin;

use App\Friend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function fetchAllMessages(){
        return Message::all();
    }

    public function fetchFriendship(){
        return Friend::all();
    }
}