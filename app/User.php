<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Comment;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const STORE_RULES = [
        'name' => 'required',
        'email' => 'required | email',
        'password' => 'required | min:8 | confirmed',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function verified()
    {
        return self::where('is_verified', true);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
