<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Post extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'text', 'user_id', 'photo_path', 'video_path', 'visibility_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
