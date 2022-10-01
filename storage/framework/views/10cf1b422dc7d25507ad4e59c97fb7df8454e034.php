<section>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.partials.header')->html();
} elseif ($_instance->childHasBeenRendered('l3189169495-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3189169495-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3189169495-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3189169495-0');
} else {
    $response = \Livewire\Livewire::mount('user.partials.header');
    $html = $response->html();
    $_instance->logRenderedChild('l3189169495-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <section class="container my-5 space-y-5">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user.dashboard.followers.partials.lists")->html();
} elseif ($_instance->childHasBeenRendered('l3189169495-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3189169495-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3189169495-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3189169495-1');
} else {
    $response = \Livewire\Livewire::mount("user.dashboard.followers.partials.lists");
    $html = $response->html();
    $_instance->logRenderedChild('l3189169495-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                              <h2 class="font-medium text-sm md:text-base"><?php echo e(ucfirst($follower->following->name)); ?></h2>
                              <p class="text-xs md:text-sm opacity-70">Instructor</p>
                              <hr class="w-1/3 hidden md:block" />
                              <div class="text-xs opacity-50"><?php echo e($follower->following->followers->count()); ?> followers</div>
                           </div>
                           <hr />
                           <div>
                             <?php if (isset($component)) { $__componentOriginal32d1dda9194ac13ea6db168e956399f422054383 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Buttons\Follow1::class, ['userId' => ''.e($follower->from_id).'']); ?>
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

</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/dashboard/followers/home.blade.php ENDPATH**/ ?>