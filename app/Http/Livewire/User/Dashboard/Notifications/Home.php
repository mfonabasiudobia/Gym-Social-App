<?php

namespace App\Http\Livewire\User\Dashboard\Notifications;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.notifications.home')->layout('layouts.user-feed');
    }
}
