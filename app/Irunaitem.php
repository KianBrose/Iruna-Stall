<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Irunaitem extends Model
{
    protected $table = 'irunaitem';

    public function scopeGetItem($query, string $name){
        return $query->where('name', $name);
    }
}
