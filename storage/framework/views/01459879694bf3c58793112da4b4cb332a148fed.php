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
                        <h1 class="font-title font-medium text-3xl">Sign Up</h1>
                        <p class="text-sm">Stay updated on your professional world</p>
                    </header>
                    <form class="space-y-5" wire:submit.prevent="submit">

                         <div class="floating-form-group group">
                                <input 
                                    type="text"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.name" 
                                />
                                <label class="floating-label">Name</label>
                            <?php $__errorArgs = ['form.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="floating-form-group group">
                                <input 
                                    type="email"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.email" 
                                />
                                <label class="floating-label">Email address</label>
                            <?php $__errorArgs = ['form.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="floating-form-group group">
                                <input 
                                    type="password"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.password" 
                                />
                                <label class="floating-label">Password</label>
                            <?php $__errorArgs = ['form.password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                      <div class="floating-form-group text-xs text-center">
                          By clicking signup, or continuing with the other options below, you agree to Tumblr’s Terms of Service and have read the Privacy Policy
                      </div>

                      <div class="floating-form-group">
                          <button type="submit" class="btn-sq btn-block btn-rounded rounded-full bg-primary text-white btn-lg">
                              Sign Up
                          </button>
                      </div>

                    </form>


                    <div class="or">
                        <div class="relative px-5 bg-white z-10 text-sm">or</div>
                    </div>

                   <?php echo $__env->make("livewire.auth.register.inc.social", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <section class="text-center">
                Already on Spotmate? <a href="<?php echo e(route('auth.login')); ?>" class="font-semibold text-blue-link">Login</a>
            </section>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/auth/register/home.blade.php ENDPATH**/ ?>