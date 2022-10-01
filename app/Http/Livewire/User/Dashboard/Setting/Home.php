<?php

namespace App\Http\Livewire\User\Dashboard\Setting;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.setting.home')->layout('layouts.user-feed');
    }
}
