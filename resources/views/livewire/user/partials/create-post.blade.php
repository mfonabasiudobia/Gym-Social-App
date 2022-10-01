 <div 
class="modal-wrapper" 
{{-- x-data="{status : false}"
@trigger-login-modal.window="status = !status" --}}
x-show="isPostOpen" 
x-cloak
x-transition
>   
@php
    $itemWrapperClass = 'block flex flex-col text-center justify-center items-center text-white space-y-3 hover:text-2xl';
    $itemClass = 'flex h-[100px] w-[100px] rounded-full flex items-center justify-center';
@endphp

<section class="modal-inner-wrapper">

        <div class="modal-body rounded-lg shadow md:w-1/3 z-[1005] px-5 space-y-3 bg-transparent" @click.outside="isPostOpen = false">
            <section class="flex items-center justify-center space-x-5">
                    <a class='{{$itemWrapperClass}}' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Text'})">
                        <button class='{{$itemClass}} bg-white'>
                            <i class="las la-text-width text-black text-xl"></i>
                        </button>
                        <span>Text</span>
                    </a>

                    <a class='{{$itemWrapperClass}}' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Photo'})">
                        <button class='{{$itemClass}} bg-orange-400'>
                            <i class="las la-image text-black text-xl"></i>
                        </button>
                        <span>Photo</span>
                    </a>


                    <a class='{{$itemWrapperClass}}' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Video'})">
                        <button class='{{$itemClass}} bg-purple-400'>
                            <i class="las la-video text-black text-xl"></i>
                        </button>
                        <span>Video</span>
                    </a>
            </section>
        </div>
    </section>


</div>