<?php

namespace App\Http\Livewire\User\Dashboard\Following;

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

        $followers = Follower::with(['follower', 'following'])->where('from_id', $userId)->paginate(10);
        return view('livewire.user.dashboard.following.home', ['followers' => $followers])->layout('layouts.user-feed');
    }

}
