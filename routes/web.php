<?php




Route::get('logout',function(){
    auth()->logout();
    return redirect()->route("auth.login");
})->name('user.logout');


Route::get('/',"App\Http\Livewire\Home\Home")->name('home');

