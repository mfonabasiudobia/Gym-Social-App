<?php

namespace App\Http\Livewire\Auth\Login;

use Livewire\Component;
use App\Repositories\AuthRepository;

class Home extends Component
{

     public $form = [
        'email' => '', 
        'password' => '',
    ];

    public function submit(AuthRepository $authRepo){
        if($authRepo->login($this->form))
            return redirect()->route('user.dashboard',['username' => 'me']);
        else
            toastr()->error('Invalid Login Details');                
    }

    public function render()
    {
        return view('livewire.auth.login.home');
    }
}
