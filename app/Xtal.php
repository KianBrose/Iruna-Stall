<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Xtal extends Model
{
    //
    protected $table = 'xtal';


    public function scopeGetItems($query)
    {
        return $query->where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'xtalPage');
    }

    public function scopeSearchByName($query, $input)
    {
        return $query->where('name', 'LIKE', "%{$input}%");
    }

    
}
