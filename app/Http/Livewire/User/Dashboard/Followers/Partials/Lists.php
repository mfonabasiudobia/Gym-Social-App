<?php

namespace App\Http\Livewire\User\Dashboard\Followers\Partials;

use Livewire\Component;

class Lists extends Component
{

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.user.dashboard.followers.partials.lists');
    }
}
