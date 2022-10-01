<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'unique_name'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function followers(){
        return $this->hasMany(Follower::class, 'to_id');
    }

    public function following(){
        return $this->hasMany(Follower::class, 'from_id');
    }

    
}
