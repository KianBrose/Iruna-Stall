<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Ai extends Model implements Searchable
{
    protected $table = 'ai';
    protected $guarded = [];

    public function getSearchResult(): SearchResult
    {
        $url = route('Ai', $this->item_id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}