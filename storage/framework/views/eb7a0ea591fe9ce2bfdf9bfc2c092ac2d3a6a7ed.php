   <section 
    x-data="{ showBar : false, isMobileNavOpen : false, isPostOpen : false }" 
    @scroll.window="showBar = (window.pageYOffset > 20) ? true : false"
    :class="showBar ? 'shadow-lg fixed top-0 left-0 z-50' : 'border-b'"
    class="w-full  bg-white text-dark ">

    <?php
        $navItem = "flex flex-col font-semibold  justify-center items-center px-4 h-full"
    ?>
        <nav class="container-fluid grid grid-cols-2 gap-x-5">
            <div class="flex items-center space-x-3 py-2">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('images/logo/logo-dark.png')); ?>" class="h-[60px] w-auto" /></a>
            </div>
            
            <section class="h-full flex items-center justify-end">
                 <ul class="hidden md:flex items-center justify-end h-full">
                    <li class="h-full">
                        <a href="<?php echo e(route('user.feed')); ?>" 
                        class="<?php echo e($navItem); ?>">
                            <i class="las la-home text-xl"></i>
                            <span class="text-xs">Home</span>
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="<?php echo e(route('user.dashboard.messages',['username' => request('username')])); ?>" 
                        class="<?php echo e($navItem); ?> <?php echo e(Request::route()->getName() == 'user.dashboard.messages' ? 'border-b-4 ' : ''); ?>">
                            <i class="las la-sms text-xl"></i>
                            <span class="text-xs">Messaging</span>
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="<?php echo e(route('user.dashboard.notifications',['username' => request('username')])); ?>" 
                        class="<?php echo e($navItem); ?> <?php echo e(Request::route()->getName() == 'user.dashboard.notifications' ? 'border-b-4 ' : ''); ?>">
                            <i class="las la-bell text-xl"></i>
                            <span class="text-xs">Notifications</span>
                        </a>
                    </li>

                    <li class="h-full relative" x-data="{show : false }">
                        <a 
                            x-on:click="show = !show"
                            href="javascript:void(0)" 
                            class="<?php echo e($navItem); ?>">
                            <i class="las la-user text-xl"></i>
                            <span class="text-xs">me</span>
                        </a>

                           <div
                x-transition  
                x-cloak
                x-show="show"
                x-on:click.away="show = false"
                class="dropdown-wrapper -left-[200px] top-full w-[250px] text-left "
                >
                        <header class="bg-light py-2 px-3 flex items-center justify-between font-light text-sm">
                            <span>Account</span>
                            <a href="<?php echo e(route('user.logout')); ?>">Log out</a>
                        </header>
                        <main class="max-h-[400px] overflow-y-auto text-sm">
                            <ul>
                                 <li>
                                    <a href="<?php echo e(route('user.dashboard.posts',['username' => request('username')])); ?>" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
                                       <i class="las la-pen text-xl"></i> <span>Posts</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
                                        <i class="las la-tasks text-xl"></i> <span>Activity</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
                                       <i class="las la-heart text-xl"></i> <span>Likes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('user.dashboard.followers',['username' => request('username')])); ?>" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
                                       <i class="las la-user-friends text-xl"></i> <span>Following</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
                                       <i class="las la-cog text-xl"></i> <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </main>
                </div>
                    </li>

                     <li class="h-full">

                        <a 
                            x-on:click="isPostOpen = !isPostOpen"
                            href="#" 
                            class="flex flex-col justify-center items-center px-4 h-full">
                            <i class="las la-pen-alt text-xl bg-gray-100 rounded-full p-2 px-3"></i>
                        </a>

                    </li>

                </ul>
                 <button class="inline-block md:hidden" x-on:click="isMobileNavOpen = !isMobileNavOpen">
                    <i class="las la-bars text-2xl"></i>
                </button>
            </section>
        </nav>
        <?php if (isset($component)) { $__componentOriginalc064d6b11aef6b7e96dde1b987508e6ebbb2d339 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\User\MobileNavbar::class, []); ?>
<?php $component->withName('user.mobile-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc064d6b11aef6b7e96dde1b987508e6ebbb2d339)): ?>
<?php $component = $__componentOriginalc064d6b11aef6b7e96dde1b987508e6ebbb2d339; ?>
<?php unset($__componentOriginalc064d6b11aef6b7e96dde1b987508e6ebbb2d339); ?>
<?php endif; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user.partials.create-post")->html();
} elseif ($_instance->childHasBeenRendered('l2431930570-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2431930570-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2431930570-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2431930570-0');
} else {
    $response = \Livewire\Livewire::mount("user.partials.create-post");
    $html = $response->html();
    $_instance->logRenderedChild('l2431930570-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user.partials.modal.create-post")->html();
} elseif ($_instance->childHasBeenRendered('l2431930570-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2431930570-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2431930570-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2431930570-1');
} else {
    $response = \Livewire\Livewire::mount("user.partials.modal.create-post");
    $html = $response->html();
    $_instance->logRenderedChild('l2431930570-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/partials/header.blade.php ENDPATH**/ ?>