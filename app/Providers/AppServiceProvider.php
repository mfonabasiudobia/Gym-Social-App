<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        // $this->app->bind('path.public', function() {
        //      return base_path().'/asset';
        //  });
    }
    
    public function boot()
    {

        // view()->composer("*", function($view){

        //     $app['setting'] =  \Cache::rememberForever('setting', function(){

        //                                 $setting = [];
                                        
        //                                 foreach (Setting::all() as $key => $result) {
        //                                     $setting[$result->title] = $result->value;
        //                                 }

        //                                 return json_decode(json_encode($setting));

        //                              });  

        //     return $view->with($app);
        // });

    }

}
