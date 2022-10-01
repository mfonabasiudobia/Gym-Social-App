<wrapper 
    class="cover-area-wrapper" 
    style="background-image: linear-gradient( rgba(21, 27, 34, 0.5), rgba(0, 0, 0, 0.4) ), url('<?php echo e(asset('/images/background/gym-02.jpg')); ?>');">
    <container-fluid class="h-screen">
               <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("partials.header.home")->html();
} elseif ($_instance->childHasBeenRendered('l2289848696-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2289848696-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2289848696-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2289848696-0');
} else {
    $response = \Livewire\Livewire::mount("partials.header.home");
    $html = $response->html();
    $_instance->logRenderedChild('l2289848696-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <div class="font-bold leading-tight text-3xl md:text-6xl text-white absolute bottom-[10vh] font-title">
                  Fit like <br /> never before
                  
                </div>
    </container-fluid>
</wrapper><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/home/inc/cover-area.blade.php ENDPATH**/ ?>