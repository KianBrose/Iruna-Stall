<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\IrunaEmailVerification;
use Auth;
use App\Friend;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [             
        'name', 'email', 'password', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['friend'];

    public function isAdmin(){
        return $this->isAdmin === '1';
    }

    public function isBanned(){
        return $this->activate === '0';
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new IrunaEmailVerification);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany('App\User', 'friend', 'user_id', 'friend_id')->get();
    }

    public function friendsOf()
    {
        return $this->belongsToMany('App\User', 'friend', 'friend_id', 'user_id')->get();
    }

    public function getFriendAttribute(){
        //return Auth::user()->friendsOfMine()->merge(Auth::user()->friendsOf());
    }
    

    
    /*
        // friendship that I started
    function friendsOfMine()
    {
    return $this->belongsToMany('User', 'friends', 'user_id', 'friend_id')
        ->wherePivot('accepted', '=', 1) // to filter only accepted
        ->withPivot('accepted'); // or to fetch accepted value
    }

    // friendship that I was invited to 
    function friendOf()
    {
    return $this->belongsToMany('User', 'friends', 'friend_id', 'user_id')
        ->wherePivot('accepted', '=', 1)
        ->withPivot('accepted');
    }

    // accessor allowing you call $user->friends
    public function getFriendsAttribute()
    {
        if ( ! array_key_exists('friends', $this->relations)) $this->loadFriends();

        return $this->getRelation('friends');
    }

    protected function loadFriends()
    {
        if ( ! array_key_exists('friends', $this->relations))
        {
            $friends = $this->mergeFriends();

            $this->setRelation('friends', $friends);
        }
    }

    protected function mergeFriends()
    {
        return $this->friendsOfMine->merge($this->friendOf);
    }*/
    
}
