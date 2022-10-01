<?php

namespace App\Http\Livewire\User\Feed;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.feed.home')->layout('layouts.user-feed');
    }
}
