<?php


    

Route::group(['middleware'=> ['UserAuth']], function () {


    Route::get('login',"App\Http\Livewire\Auth\Login\Home")->name('auth.login');
    Route::get('ssssj',"App\Http\Livewire\Auth\Login\Home")->name('login');
    Route::get('signup',"App\Http\Livewire\Auth\Register\Home")->name('auth.signup');
    
    Route::get('forgot-password',"App\Http\Livewire\Auth\ForgotPassword\Home")->name('auth.forgot_password');

    Route::get('u/feed',"App\Http\Livewire\User\Feed\Home")->name('user.feed');
    Route::get('u/{username}',"App\Http\Livewire\User\Dashboard\Posts\Home")->name('user.dashboard');

    Route::get('u/{username}/posts',"App\Http\Livewire\User\Dashboard\Posts\Home")->name('user.dashboard.posts');
    Route::get('u/{username}/activity',"App\Http\Livewire\User\Dashboard\Activity\Home")->name('user.dashboard.activities');
    Route::get('u/{username}/settings',"App\Http\Livewire\User\Dashboard\Setting\Home")->name('user.dashboard.settings');
    Route::get('u/{username}/followers',"App\Http\Livewire\User\Dashboard\Followers\Home")->name('user.dashboard.followers');
    Route::get('u/{username}/following',"App\Http\Livewire\User\Dashboard\Following\Home")->name('user.dashboard.following');
    Route::get('u/{username}/notifications',"App\Http\Livewire\User\Dashboard\Notifications\Home")->name('user.dashboard.notifications');
    Route::get('u/{username}/messages',"App\Http\Livewire\User\Dashboard\Messages\Home")->name('user.dashboard.messages');

});