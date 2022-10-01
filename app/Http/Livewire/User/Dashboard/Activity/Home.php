<?php

namespace App\Http\Livewire\User\Dashboard\Activity;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.activity.home')->layout('layouts.user-feed');
    }
}
