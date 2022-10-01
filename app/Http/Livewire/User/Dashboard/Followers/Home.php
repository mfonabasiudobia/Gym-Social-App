<?php

namespace App\Http\Livewire\User\Dashboard\Followers;

use Livewire\Component;
use App\Models\Follower;
use App\Http\Traits\Followers;
use AppHelper;

class Home extends Component
{

    protected $listeners = ['toggleFollow', 'refreshComponent' => '$refresh'];

    use Followers;

    public function render()
    {

        $userId = AppHelper::exec()->getUser()->id;

        $followers = Follower::with(['follower', 'following'])->where('to_id', $userId)->paginate(10);
        return view('livewire.user.dashboard.followers.home', ['followers' => $followers])->layout('layouts.user-feed');
    }
}
