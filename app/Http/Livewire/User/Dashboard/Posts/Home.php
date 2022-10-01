<?php

namespace App\Http\Livewire\User\Dashboard\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Repositories\UserRepository;

class Home extends Component
{

    protected $listeners = ['PostCreated'];
    public $posts = [];
    public $user;

    public function mount(){

        $user = new UserRepository;
        $this->user = $user->getByUsername();
       
        $this->posts = Post::with('user')->where('user_id', $this->user->id)->orderBy('created_at', 'desc')->get();
    }

    public function PostCreated(){

        $this->posts = Post::with('user')->where('user_id', $this->user->id)->orderBy('created_at', 'desc')->get();

    }


    public function render()
    {
        return view('livewire.user.dashboard.posts.home')->layout('layouts.user-feed');
    }
}
