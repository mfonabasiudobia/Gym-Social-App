<?php

namespace App\Http\Livewire\User\Dashboard\Timeline;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.timeline.home')->layout('layouts.user-feed');
    }
}
