<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Relic extends Model
{
    //
    protected $table = 'relic';

    public function scopeGetItems($query)
    {
        return $query->where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'relicPage');
    }

    public function scopeSearchByName($query, $input)
    {
        return $query->where('name', 'LIKE', "%{$input}%");
    }
}
