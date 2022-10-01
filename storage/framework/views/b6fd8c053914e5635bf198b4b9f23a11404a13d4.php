 <div 
class="modal-wrapper" 

x-show="isPostOpen" 
x-cloak
x-transition
>   
<?php
    $itemWrapperClass = 'block flex flex-col text-center justify-center items-center text-white space-y-3 hover:text-2xl';
    $itemClass = 'flex h-[100px] w-[100px] rounded-full flex items-center justify-center';
?>

<section class="modal-inner-wrapper">

        <div class="modal-body rounded-lg shadow md:w-1/3 z-[1005] px-5 space-y-3 bg-transparent" @click.outside="isPostOpen = false">
            <section class="flex items-center justify-center space-x-5">
                    <a class='<?php echo e($itemWrapperClass); ?>' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Text'})">
                        <button class='<?php echo e($itemClass); ?> bg-white'>
                            <i class="las la-text-width text-black text-xl"></i>
                        </button>
                        <span>Text</span>
                    </a>

                    <a class='<?php echo e($itemWrapperClass); ?>' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Photo'})">
                        <button class='<?php echo e($itemClass); ?> bg-orange-400'>
                            <i class="las la-image text-black text-xl"></i>
                        </button>
                        <span>Photo</span>
                    </a>


                    <a class='<?php echo e($itemWrapperClass); ?>' x-on:click="isPostOpen = false;$dispatch('trigger-post-modal', {type : 'Video'})">
                        <button class='<?php echo e($itemClass); ?> bg-purple-400'>
                            <i class="las la-video text-black text-xl"></i>
                        </button>
                        <span>Video</span>
                    </a>
            </section>
        </div>
    </section>


</div><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/partials/create-post.blade.php ENDPATH**/ ?>