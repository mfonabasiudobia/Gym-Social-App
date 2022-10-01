<?php

namespace App\Http\Livewire\User\Partials\Modal;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use Vimeo\Laravel\Facades\Vimeo;
use Vimeo\Laravel\VimeoManager;

class CreatePost extends Component
{

    use WithFileUploads;

    public $text, $photo, $video, $postVisibility = 'public';

    public function submit(VimeoManager $vimeo){

        $rules = ['postVisibility' => 'required|in:public,hidden,network'];

        if($this->text)
                $rules['text'] = 'required|max:2000';

        if($this->photo)
                 $rules['photo'] = 'required|mimes:jpeg,png,jpg,gif';

        if($this->video)
                 $rules['video'] = 'required';


        $validator = validator()->make([
                'text' => $this->text, 'photo' => $this->photo, 
                'video' => $this->video, 'postVisibility' => $this->postVisibility
        ], $rules);

        if($validator->fails())
            return toastr()->error($validator->errors()->first());           

        try {
                \DB::beginTransaction();

                if($this->video)
                     $uri = basename($vimeo->upload($this->video->path()));

                if(strlen($this->text) === 0 && strlen($this->video) === 0 && strlen($this->photo) === 0)
                        throw new \Exception("Error Processing Request", 1);

                $post = Post::create([
                    'user_id' => auth()->id(),
                    'text' => $this->text ?? NULL,
                    'photo_path' => $this->photo ? $this->photo->storeAs('images/user/post-image', uniqid() .  '.' . $this->photo->extension()) : NULL,
                    'video_path' => $this->video ? $uri : NULL,
                ]);

                if($post){
                    $this->dispatchBrowserEvent('trigger-post-created');
                    $this->emit('PostCreated');
                    $this->reset();
                    toastr()->success("Post has been created"); 
                }

                \DB::commit();

        } catch (\Exception $e) {
                
                \DB::rollback();
                return toastr()->error('Error Processing Request');
        }

        
        
    }



    public function render()
    {
        return view('livewire.user.partials.modal.create-post');
    }
}
