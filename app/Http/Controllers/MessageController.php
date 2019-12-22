<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\User;
use App\Events\PrivateMessageSent;
use Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('chat.private');
    }

    public function fetch(User $user){
        $privateMessage = Message::with('user')
        ->where(['user_id'=> auth()->id(), 'receiver_id'=> $user->id])
        ->orWhere(function($query) use($user){
            $query->where(['user_id' => $user->id, 'receiver_id' => auth()->id()]);
        })
        ->get();
        return $privateMessage;

    }

    public function sendMessage(Request $request, User $user){
        $input = $request->all();
        $input['receiver_id']=$user->id;
        $message =auth()->user()->messages()->create($input);

        broadcast(new PrivateMessageSent($message->load('user')))->toOthers();
        
        return response(['status'=>'Message  sent successfully','message'=>$message]);
    }

    public function users()
    {
       return User::all();
    }
}
