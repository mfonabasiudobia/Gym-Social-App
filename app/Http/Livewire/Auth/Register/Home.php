<?php

namespace App\Http\Livewire\Auth\Register;

use Livewire\Component;
use App\Repositories\AuthRepository;

class Home extends Component
{

    public $form = [
        'email' => '', 
        'name' => '',
        'password' => '',
    ];

  
    public function submit(AuthRepository $authRepo){

        $this->validate([
            'form.email' => 'required|email|unique:users,email',
            'form.name' => 'required',
            'form.password' => 'required|min:6',
        ]);

        

       if($user = $authRepo->createUser($this->form))
                return redirect()->route('auth.login');
       
       
    }

    public function render()
    {
        return view('livewire.auth.register.home');
    }
}
