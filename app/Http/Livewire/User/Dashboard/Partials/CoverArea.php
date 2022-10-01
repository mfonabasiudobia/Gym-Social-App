<?php

namespace App\Http\Livewire\User\Dashboard\Partials;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Repositories\UserRepository;
use App\Repositories\FollowerRepository;
use App\Models\Follower;

class CoverArea extends Component
{

    use WithFileUploads;

    public $profilePhoto;
    public $coverPhoto;

    public $user;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount(){
        $user = new UserRepository;

        $this->user = $user->getByUsername();
    }


    public function toggleFollow(FollowerRepository $follower){
        if($follower->toggleFollow(['to_id' => $this->user->id]))
            return $this->emit('refreshComponent');
    }


    public function updatedProfilePhoto($value){

        $validator = validator()->make(['profilePhoto' => $this->profilePhoto],[
            'profilePhoto' => "required|mimes:jpeg,png,jpg",
        ]);

        if($validator->fails())
            return  toastr()->error($validator->errors()->first());

        $path = $value->storeAs('images/user/profile-photo', uniqid() .  '.' . $value->extension());

        $user = auth()->user();
        $user->profile_picture_path = $path;
        $user->save();

        toastr()->success("Profile Picture Updated");
    }


    public function updatedCoverPhoto($value){

        $validator = validator()->make(['coverPhoto' => $this->coverPhoto],[
            'coverPhoto' => "required|mimes:jpeg,png,jpg",
        ]);

        if($validator->fails())
            return $this->dispatchBrowserEvent('toaster',["status" => "error", "message" => $validator->errors()->first()]);

        $path = $value->storeAs('images/user/cover-photo', uniqid() .  '.' . $value->extension());

        $user = auth()->user();
        $user->cover_photo_path = $path;
        $user->save();

        toastr()->success("Cover Photo Updated");
    }


    public function render()
    {
        return view('livewire.user.dashboard.partials.cover-area')->layout('layouts.user-feed');
    }
}
