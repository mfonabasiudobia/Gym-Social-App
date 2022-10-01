<main class="space-y-5">
    <?php
        $navItem = "font-medium text-sm block py-3 px-2";
        $active = "border-b-2 border-primary"
    ?>
    <section class="w-full">
        <header class="bg-white border shadow-lg flex items-center space-x-5">
            <a 
                href="<?php echo e(route('user.dashboard.followers',['username' => session('username')])); ?>" 
                class="<?php echo e($navItem); ?> <?php echo e(AppHelper::exec()->isCurrentRoute('user.dashboard.followers') ? $active : ''); ?>">
                <strong><?php echo e(AppHelper::exec()->getUser()->followers->count()); ?></strong> Followers
            </a>

            <a 
                href="<?php echo e(route('user.dashboard.following',['username' => session('username')])); ?>" 
                class="<?php echo e($navItem); ?> <?php echo e(AppHelper::exec()->isCurrentRoute('user.dashboard.following') ? $active : ''); ?>">
                <strong><?php echo e(AppHelper::exec()->getUser()->following->count()); ?></strong> Following
            </a>
        </header>

        
    </section>

</main><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/dashboard/followers/partials/lists.blade.php ENDPATH**/ ?>