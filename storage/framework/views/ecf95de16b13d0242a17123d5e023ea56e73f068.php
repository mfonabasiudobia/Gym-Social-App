<main class="page-wrapper bg-white">
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
    <div class="container-fluid flex flex-col justify-start items-center h-full space-y-8 py-2">
        <header class="w-full">
            <img src="<?php echo e(asset('images/logo/logo-dark.png')); ?>" class="h-[80px]" />
        </header>

        <div class="space-y-3 rounded-lg p-5 shadow-lg border md:w-1/3">
                <section class="space-y-3">
                    <header class="space-y-2">
                        <h1 class="font-title font-medium text-3xl">Sign In</h1>
                        <p class="text-sm">Stay updated on your professional world</p>
                    </header>
                    <form class="space-y-5" wire:submit.prevent="submit">

                        <div class="floating-form-group group">
                                <input 
                                    type="email"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.email" 
                                />
                                <label class="floating-label">Email address</label>
                        </div>

                        <div class="floating-form-group group">
                                <input 
                                    type="password"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.password" 
                                />
                                <label class="floating-label">Password</label>
                        </div>


                      <div class="floating-form-group text-xs text-center">
                          By clicking log in, or continuing with the other options below, you agree to Tumblr???s Terms of Service and have read the Privacy Policy
                      </div>

                      <div class="floating-form-group">
                          <button type="submit" class="btn-sq btn-block btn-rounded rounded-full bg-primary text-white btn-lg">
                              Sign In
                          </button>
                      </div>


                      <div class="floating-form-group group text-center">
                          <a href="<?php echo e(route('auth.forgot_password')); ?> " class="font-semibold text-blue-link">Forgot Password?</a>
                      </div>

                    </form>


                    <div class="or">
                        <div class="relative px-5 bg-white z-10 text-sm">or</div>
                    </div>

                    <?php echo $__env->make("livewire.auth.login.inc.social", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <section class="text-center">
                New to Spotmate? <a href="<?php echo e(route('auth.signup')); ?>" class="font-semibold text-blue-link">Join now</a>
            </section>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/auth/login/home.blade.php ENDPATH**/ ?>