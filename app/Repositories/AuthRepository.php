<?php

namespace App\Repositories;

use App\Models\User;
use Str;
// use Socialite;

class AuthRepository
{
    
    public function createUser($data){

        $uniueId = strtolower(str_replace(" ", '', $data['name']) . '-' . Str::random(5));

        $user = User::create(array_merge($data, ['password' => bcrypt($data['password']), 'unique_name' => $uniueId]));
        return $user;
    }

    public function login($data){
        return auth()->attempt($data); 
    }


    // public function googleCallback(){
        
    //     try {

    //         $data = Socialite::driver('google')->user();

    //         if($this->socialCreateUser($data, 'google'))
    //                 return redirect()->route('user.dashboard');
    //         else
    //                 return redirect()->route('auth.register');

    //     } catch (Exception $e) {
            
    //         return redirect()->route('auth.register');

    //     }
    // }


    // public function instagramCallback(){
        
    //     try {

    //         $data = Socialite::driver('instagram')->user();

    //         if($this->socialCreateUser($data, 'instagram'))
    //                 return redirect()->route('user.dashboard');
    //         else
    //                 return redirect()->route('auth.register');

    //     } catch (Exception $e) {
            
    //         return redirect()->route('auth.register');

    //     }
    // }

    // public function socialCreateUser($data, $driver){

    //     $user = User::where('email', $data->email)->first();

    //     if(!$user){

    //         $user = User::Create([
    //                 'name' => $data->name,
    //                 'provider' => $driver,
    //                 'provider_id' => $data->id,
    //                 'password' => bcrypt(Str::random(24))
    //             ]);

    //          auth()->login($user);

    //          return true;

    //     }else if($user && $user->provider == $driver){
    //         auth()->login($user);
    //         return true;  
    //     }

    //         return false;

    // }

    // public function authRedirect(){
    //     return Socialite::driver(request()->driver)->redirect();
    // }





}
