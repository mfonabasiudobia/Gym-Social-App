<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    

    public function createdAt(){
        return $this->created_at->format('M, d, Y');
    }

    public function timeAgo(){
        return $this->created_at->diffForHumans();
    }


}
