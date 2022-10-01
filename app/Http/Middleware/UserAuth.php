<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use AppHelper;

class UserAuth
{
 
    public function handle(Request $request, Closure $next)
    {
       
        if(AppHelper::exec()->isAuthRoute()){

            if(auth()->user())
                return redirect()->route("user.dashboard");    

        }else{

            if(!auth()->user())
                return redirect()->route("auth.login");
        }

        return $next($request);
    }
    
}
