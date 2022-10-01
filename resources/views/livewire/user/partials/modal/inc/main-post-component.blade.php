@php
    $closeButton = 'absolute z-50 text-white top-1/2 left-1/2 invisible group-hover:visible';
    $previewWrapper = "relative z-30 group bg-black hover:bg-opacity-30";
@endphp
<section class="space-y-3" x-show="currentComponent == 'main-post'">
	       <div class="flex items-center justify-between">
                <span>{{auth()->user()->name}}</span>

                <button type="button" x-on:click="currentComponent = 'post-visibility'" >
                    <i class="las la-cog text-xl"></i>
                </button>
            </div>

            @if($errors->any())
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{$error}}</li>
                    @endforeach
                </ul>
            @endIf

            <div x-show="type == 'Text'">
                <textarea class="form-control" rows="7" placeholder="What do you want to tell?" wire:model.defer="text"></textarea>
            </div>

            <section x-show="type == 'Photo'">

                <label for="photo" class="{{ $labelWrapper }}" x-show="!photo">
                    <div class="{{$labelDesc}}">
                        <i class="las la-image text-2xl"></i>
                        <span>Upload Image</span>
                    </div>
                    <input type="file" accept="image/*" hidden id="photo" wire:model.defer="photo" 
                    x-on:change="photo = URL.createObjectURL($event.target.files[0]);" />
                </label>

                <section class="{{ $previewWrapper }}">
                    <img :src='photo' class="object-cover max-h-[50vh] w-full" />
                    <button class="{{ $closeButton }}" type="button">
                        <i class="las la-times text-xl" x-on:click="photo = ''"></i>
                    </button>
                </section>
            </section>

            <section x-show="type == 'Video'">
                <label for="video" class="{{ $labelWrapper }}">
                    <div class="{{$labelDesc}}">
                        <i class="las la-video text-2xl"></i>
                        <span>Upload Video</span>
                    </div>
                    <input 
                        type="file" accept="video/*" hidden id="video" wire:model.defer="video" 
                        x-on:change="video = URL.createObjectURL($event.target.files[0]);" />
                </label>

              {{--   <section class="{{ $previewWrapper }}">
                    <button type="button">
                        <i class="las la-times" x-on:click="video = ''"></i>
                    </button>
                </section> --}}
            </section>
            
            <section class="flex items-center space-x-3">
                <template 
                    x-for="item in [
                    {icon : 'las la-text-width', type : 'Text'}, 
                    {icon : 'las la-image', type : 'Photo'}, 
                    {icon : 'las la-video', type : 'Video'}]">
                    <button 
                        type="button"
                        x-show="type != item.type" 
                        x-on:click="type = item.type" 
                        class="btn bg-light text-xs rounded-full px-3 py-1">
                        <i :class="item.icon"></i> <span x-text="item.type"></span>
                    </button>
                </template>
            </section>
            <hr />

            <div class="flex items-center justify-end">
                <button type="submit" class="btn-lg btn-rounded bg-primary text-white">
                    Post Now
                </button>
            </div>
</section>