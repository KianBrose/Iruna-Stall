<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeUnread($query){
        return $query->groupBy('user_id')
                    ->where('receiver_id', auth()->user()->id)
                    ->where('read', false)
                    ->get();
    }
}
