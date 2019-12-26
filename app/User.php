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

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friend', 'user_id', 'friend_id')->as('friends');
    }

    public function getFriendAttribute(){
        $friendofuser = $this->friends()->get();
        return $friendofuser;
    }

    
}
