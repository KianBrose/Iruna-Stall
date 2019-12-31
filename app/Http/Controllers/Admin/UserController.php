<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function UpdateUserActivate($id){
        $user = User::findOrFail($id);
        if($user->activate == 1){
            $user->activate = 0;
            $user->save();
        } else if($user->activate == 0){
            $user->activate = 1;
            $user->save();
        }

        return redirect()->back();
    }

    public function UpdateAdminPerm($id){
        $user = User::findOrFail($id);
        if(Auth::user()->isAdmin == 1){
            if($user->isAdmin == 0){
                $user->isAdmin = 1;
                $user->save();
            }
        }
        
        
    }
}
