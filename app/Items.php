<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Items extends Model
{
    //
    protected $table = 'item';

    public function getItems(){
        return Items::where('owner_id', Auth::user()->user_id)->get();
    }
}
