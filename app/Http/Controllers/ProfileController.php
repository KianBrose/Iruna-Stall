<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\editProfile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}
