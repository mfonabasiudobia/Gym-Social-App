<section>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.partials.header')->html();
} elseif ($_instance->childHasBeenRendered('l313534312-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l313534312-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l313534312-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l313534312-0');
} else {
    $response = \Livewire\Livewire::mount('user.partials.header');
    $html = $response->html();
    $_instance->logRenderedChild('l313534312-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <section class="container my-5 space-y-5">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user.dashboard.followers.partials.lists")->html();
} elseif ($_instance->childHasBeenRendered('l313534312-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l313534312-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l313534312-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l313534312-1');
} else {
    $response = \Livewire\Livewire::mount("user.dashboard.followers.partials.lists");
    $html = $response->html();
    $_instance->logRenderedChild('l313534312-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if($followers->total() == 0): ?>
               <div class="text-center py-5">No Followers Found</div>
            <?php endif; ?>
            <wrapper class="grid md:grid-cols-6 border rounded-xl bg-white">
                  <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <section class="border-b md:border-r">
                        <section class="p-3 space-y-1 flex md:flex-col items-center justify-between md:justify-center">
                           <img src="<?php echo e(asset($follower->follower->profile_picture_path)); ?>" class="rounded-full w-[50px] h-[50px] md:w-[100px] md:h-[100px]" />
                           <div class="flex-1 p-2 md:flex md:flex-col md:items-center space-y-1">
                              <h2 class="font-medium text-sm md:text-base"><?php echo e(ucfirst($follower->follower->name)); ?></h2>
                              <p class="text-xs md:text-sm opacity-70">Instructor</p>
                              <hr class="w-1/3 hidden md:block" />
                              <div class="text-xs opacity-50"><?php echo e($follower->follower->followers->count()); ?> followers</div>
                           </div>
                           <hr />
                           <div>
                             <?php if (isset($component)) { $__componentOriginal32d1dda9194ac13ea6db168e956399f422054383 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Buttons\Follow1::class, ['userId' => ''.e($follower->to_id).'']); ?>
<?php $component->withName('buttons.follow1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32d1dda9194ac13ea6db168e956399f422054383)): ?>
<?php $component = $__componentOriginal32d1dda9194ac13ea6db168e956399f422054383; ?>
<?php unset($__componentOriginal32d1dda9194ac13ea6db168e956399f422054383); ?>
<?php endif; ?>
                           </div>
                        </section>
                     </section>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </wrapper>

    </section>

</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/dashboard/following/home.blade.php ENDPATH**/ ?>