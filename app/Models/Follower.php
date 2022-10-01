<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_id', 'to_id'
    ];

    public function follower(){
        return $this->belongsTo(User::class, 'to_id')->with(['followers', 'following']);
    }

    public function following(){
        return $this->belongsTo(User::class, 'from_id')->with(['followers', 'following']);
    }

}
