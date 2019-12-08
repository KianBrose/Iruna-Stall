<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Equipment extends Model
{
    protected $table = 'equipment';
    protected $guarded = [];

    public function getEquipmentItems(){
        return Equipment::where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'equipPage');
    }
}