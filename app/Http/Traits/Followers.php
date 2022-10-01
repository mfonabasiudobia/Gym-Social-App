<?php

namespace App\Http\Traits;
use App\Repositories\FollowerRepository;

trait Followers {

  public function toggleFollow($userId, FollowerRepository $follower){
        
        if($follower->toggleFollow(['to_id' => $userId]))
            return $this->emit('refreshComponent');

  }


}