 <div 
class="modal-wrapper" 
x-data="{
    status : false,
    isSettingOpen : false,
    photo : '', 
    video : '',
    type : 'Text',
    currentComponent : 'main-post',
    postVisibility : @entangle('postVisibility').defer
}"
@trigger-post-modal.window="status = !status; video = ''; photo = '';type = $event.detail.type"
@trigger-post-created.window="status = !status"
x-show="status" 
x-cloak
x-transition
>  
<x-loading /> 

@php
    $labelWrapper = "text-center overflow-hidden relative block w-full h-[200px] bg-light border flex justify-center items-center";
    $labelDesc = "flex flex-col items-center justify-center text-sm font-light";  
@endphp

<section class="modal-inner-wrapper">
        <form
            wire:submit.prevent="submit"
            class="modal-body rounded-lg shadow w-full md:w-1/2 z-[1005] px-5 bg-white" 
            @click.outside="status = false"
        >
             @include("livewire.user.partials.modal.inc.main-post-component")
             @include("livewire.user.partials.modal.inc.post-visibility-component")
        </form>
    </section>

    
</div>