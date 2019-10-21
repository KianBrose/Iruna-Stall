<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Ai extends Model
{
    protected $table = 'ai';
    protected $guarded = [];
    protected $fillable = ['name', 'price', 'color', 'quantity', 'contact'];

    
}