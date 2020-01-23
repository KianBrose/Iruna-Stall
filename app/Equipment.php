<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Equipment extends Model
{
    protected $table = 'equipment';
    protected $guarded = [];

    public function scopeGetItems($query){
        return $query->where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'equipPage');
    }

    /**
     * 
     * 
     */
    public function scopeSearchByName($query, $input)
    {
        return $query->where('name', 'LIKE', "%{$input}%");
    }

    /**
     * 
     * 
     */
    public function scopeSearchByAbility($query, $input)
    {
        return $query->orWhere('ability', 'LIKE', "%{$input}%");
    }

    /**
     * 
     * 
     */
    public function scopeSearchBySlot($query, $input)
    {
        return $query->orWhere('slot1', 'LIKE', "%{$input}%")
                    ->orWhere('slot2', 'LIKE', "%{$input}%");
    }
}