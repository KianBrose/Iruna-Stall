<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Ai extends Model
{
    protected $table = 'ai';
    protected $guarded = [];
    protected $fillable = ['name', 'price', 'color', 'quantity', 'contact'];

    public function scopeGetItems($query){
        return $query->where('owner_id', Auth::user()->user_id)->paginate(10, ['*'], 'AlPage');
    }

    public function scopeAdd($name, $color, $price, $quantity){
        $createAi = $this->createAi($name, $color, $price, $quantity);
    }

    private function createAi($name, $color, $price, $quantity){
        
    } 
}