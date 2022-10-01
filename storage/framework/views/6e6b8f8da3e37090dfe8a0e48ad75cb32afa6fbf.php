 <div 
class="modal-wrapper" 
x-data="{
    status : false,
    isSettingOpen : false,
    photo : '', 
    video : '',
    type : 'Text',
    currentComponent : 'main-post',
    postVisibility : <?php if ((object) ('postVisibility') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('postVisibility'->value()); ?>')<?php echo e('postVisibility'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('postVisibility'); ?>')<?php endif; ?>.defer
}"
@trigger-post-modal.window="status = !status; video = ''; photo = '';type = $event.detail.type"
@trigger-post-created.window="status = !status"
x-show="status" 
x-cloak
x-transition
>  
<?php if (isset($component)) { $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Loading::class, []); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d)): ?>
<?php $component = $__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d; ?>
<?php unset($__componentOriginal50b35e9efa5b3035ebe877cc122341d1e2fb9c9d); ?>
<?php endif; ?> 

<?php
    $labelWrapper = "text-center overflow-hidden relative block w-full h-[200px] bg-light border flex justify-center items-center";
    $labelDesc = "flex flex-col items-center justify-center text-sm font-light";  
?>

<section class="modal-inner-wrapper">
        <form
            wire:submit.prevent="submit"
            class="modal-body rounded-lg shadow w-full md:w-1/2 z-[1005] px-5 bg-white" 
            @click.outside="status = false"
        >
             <?php echo $__env->make("livewire.user.partials.modal.inc.main-post-component", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php echo $__env->make("livewire.user.partials.modal.inc.post-visibility-component", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </section>

    
</div><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/partials/modal/create-post.blade.php ENDPATH**/ ?>