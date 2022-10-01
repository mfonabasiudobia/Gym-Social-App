<?php

namespace App\Repositories;
use App\Models\User;
use Request;

class UserRepository
{
    
    protected $queryString = ['username'];

    public function getByUsername(){

        if(request('username') == null){
            $username = session('username');
        }else{
            session()->put('username', request('username'));
            $username = request('username');
        }
        
        if($username == "me"){
            return auth()->user();
        }else{
            $user = User::where('unique_name', $username)->firstOrFail();
            return $user;
        }

    }


}
