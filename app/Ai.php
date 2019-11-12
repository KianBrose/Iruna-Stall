<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Ai extends Model
{
    protected $table = 'ai';
    protected $guarded = [];
    protected $fillable = ['name', 'price', 'color', 'quantity', 'contact'];

    public function getAiItem(){
        return Ai::where('owner_id', Auth::user()->user_id)->get();
    }
}