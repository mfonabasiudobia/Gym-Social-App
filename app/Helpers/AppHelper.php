<?php 

namespace App\Helpers;
use App\Repositories\UserRepository;
use App\Models\User;

final class AppHelper {

    private $currentRoute;

    public function __construct(){
        $this->currentRoute = basename(request()->route()->getName());
    }

    public function isCurrentRoute(string $route) : bool {
        return ($this->currentRoute == $route);
    }

    public function isAuthRoute() : bool {
        return in_array($this->currentRoute, ['auth.login', 'auth.signup']);
    }

     public function generateUniqueImageName(string $exe) : string {
        return '.' . uniqid() . '.' . $exe;
    }

    public function getUser(){
        $user = new UserRepository;
        return $user->getByUsername();
    }

    public function getUserById($userId){
        return User::with(['followers', 'following'])->find($userId);
    }

    public static function exec() : self {
        return new AppHelper();
    }


}
