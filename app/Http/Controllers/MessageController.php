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

    public function fetch(User $user)
    {
        $privateMessage = Message::with('user')
        ->where(['user_id'=> auth()->id(), 'receiver_id' => $user->id])
        ->orWhere(function($query) use ($user){
            $query->where(['user_id' => $user->id, 'receiver_id' => auth()->id()]);
        })
        ->get();
        
        foreach($privateMessage as $message)
        {
            if($message->receiver_id == auth()->id()){
                $message->read = true;
                $message->save();
            }
        }
        return $privateMessage;

    }

    public function sendMessage(Request $request, User $user)
    {
        $input = $request->all();
        $input['receiver_id']=$user->id;
        $message =auth()->user()->messages()->create($input);

        broadcast(new PrivateMessageSent($message->load('user')))->toOthers();
        
        return response(['status'=>'Message  sent successfully','message'=>$message]);
    }

    public function users()
    {
       return Auth::user()->friendsOfMine()->merge(Auth::user()->friendsOf());
    }

    public function showUnreadMessage()
    {
        $message = Message::with('user')
                    ->groupBy('user_id')
                    ->where('receiver_id', auth()->user()->id)
                    ->where('read', false)
                    ->get();

        return $message;
    }


}
 