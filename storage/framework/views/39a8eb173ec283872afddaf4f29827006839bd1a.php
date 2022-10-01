<section class="bg-light">

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.partials.header')->html();
} elseif ($_instance->childHasBeenRendered('l4203905297-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4203905297-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4203905297-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4203905297-0');
} else {
    $response = \Livewire\Livewire::mount('user.partials.header');
    $html = $response->html();
    $_instance->logRenderedChild('l4203905297-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.dashboard.partials.cover-area')->html();
} elseif ($_instance->childHasBeenRendered('l4203905297-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l4203905297-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4203905297-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4203905297-1');
} else {
    $response = \Livewire\Livewire::mount('user.dashboard.partials.cover-area');
    $html = $response->html();
    $_instance->logRenderedChild('l4203905297-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <section class="container grid md:grid-cols-3 gap-5 my-5 ">
            
      <main class="md:col-span-2 space-y-5 ">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="bg-white border border-gray-100 p-5 space-y-3">
                    <header class="flex items-center justify-start space-x-3">
                        <img src="<?php echo e(asset($post->user->profile_picture_path)); ?>" class="rounded-full w-[50px] h-[50px]" />
                        <div>
                            <h2 class="font-semibold"><a href="#" class="link"><?php echo e($post->user->name); ?></a></h2>
                            <small><?php echo e($post->timeAgo()); ?></small>
                        </div>
                    </header>
                    <section class="text-sm space-y-3">

                     <?php if($post->photo_path): ?>
                        <img src="<?php echo e(asset($post->photo_path)); ?>">
                     <?php elseif($post->video_path): ?>
                         <?php if (isset($component)) { $__componentOriginal2b325c019531b5686927873112e4ad7bb330a506 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ShowVideo::class, ['path' => ''.e($post->video_path).'']); ?>
<?php $component->withName('show-video'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b325c019531b5686927873112e4ad7bb330a506)): ?>
<?php $component = $__componentOriginal2b325c019531b5686927873112e4ad7bb330a506; ?>
<?php unset($__componentOriginal2b325c019531b5686927873112e4ad7bb330a506); ?>
<?php endif; ?>
                     <?php endif; ?>

                        <nav class="flex items-center space-x-12">
                            <a href="#" class="relative">
                                <i class="las la-eye text-xl"></i>
                                <small class="absolute -top-1 -right-7">1.23k</small>
                            </a>

                            <a href="#" class="relative">
                                <i class="las la-comment text-xl"></i>
                                <small class="absolute -top-1 -right-7">23k</small>
                            </a>


                            <a href="#" class="relative">
                                <i class="lar la-heart text-xl"></i>
                                <small class="absolute -top-1 -right-7">1.23k</small>
                            </a>
                        </nav>
                        <?php if($post->text): ?>
                         <p><?php echo e($post->text); ?></p>
                        <?php endif; ?>
                    </section>

                 
                </section>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>

            <section class="space-y-5 relative ">


            <section>
                 <header class="font-medium">Recommended</header>
              <main class="bg-white border space-y-5 p-3 py-5">
                   
                        <section class="flex space-x-3">
                            <img src="<?php echo e(asset('images/user/profile-photo/user-avatar.jpg')); ?>" class="w-[40px] h-[40px] rounded-full" />
                            <section class="space-y-1  w-full">
                                 <header class="flex items-center space-x-2 justify-between">
                                    <a href="#" class="font-medium text-sm">Black demon</a>
                                    <button class="rounded-full px-2 border-2 text-xs justify-self-end">
                                       Follow
                                    </button>
                                </header>
                              
                                <p class="text-xs font-light">Democratizing access to in-demand skills</p>

                                <span class="text-xs font-light">120 Followers</span>
                               
                            </section>
                        </section>

                         <section class="flex space-x-3">
                            <img src="<?php echo e(asset('images/user/profile-photo/user-avatar.jpg')); ?>" class="w-[40px] h-[40px] rounded-full" />
                            <section class="space-y-1 w-full">
                                 <header class="flex items-center space-x-2 justify-between">
                                    <a href="#" class="font-medium text-sm">Black demon</a>
                                    <button class="rounded-full px-2 border-2 text-xs justify-self-end">
                                       Follow
                                    </button>
                                </header>
                              
                                <p class="text-xs font-light">Democratizing access to in-demand skills</p>

                                <span class="text-xs font-light">120 Followers</span>
                               
                            </section>
                        </section>

               
                </main> 
            </section>

            
            <?php if (isset($component)) { $__componentOriginal513f25cd918602396247ff009d914634449fa58e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\User\Footer::class, []); ?>
<?php $component->withName('user.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal513f25cd918602396247ff009d914634449fa58e)): ?>
<?php $component = $__componentOriginal513f25cd918602396247ff009d914634449fa58e; ?>
<?php unset($__componentOriginal513f25cd918602396247ff009d914634449fa58e); ?>
<?php endif; ?>

            </section>

    </section>

</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/dashboard/posts/home.blade.php ENDPATH**/ ?>