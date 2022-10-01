<?php

namespace App\Http\Livewire\User\Dashboard\Messages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.messages.home')->layout('layouts.user-feed');
    }
}
