<section>
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
    <section
   class="min-h-[20vh] md:min-h-[60vh] background-image flex  items-end container-fluid relative" 
   style="background-image: linear-gradient( rgba(21, 27, 34, 0.2), rgba(0, 0, 0, 0.1) ), url('<?php echo e(asset(auth()->user()->cover_photo_path)); ?>');">
       
       <section class="w-full flex justify-between text-white py-5">
            <section class="md:ml-[200px]">
                
                 <?php if($user->id == auth()->id()): ?>
                 <div class="text-sm md:text-base absolute top-4 left-4 md:static">
                    <label 
                    class="bg-overlay inline-block duration-500 hover:after:bg-transparent after:z-0 hover:border hover:border-primary rounded flex space-x-1 text-xs p-4 py-1 items-center cursor-pointer" 
                    for="cover-photo-edit">
                        <i class="las la-camera text-base relative z-10"></i>
                        <span class="relative z-10">Edit Cover Photo</span>
                    </label>
                     <input 
                        wire:model="coverPhoto"
                        type="file" 
                        hidden 
                        id="cover-photo-edit"/>
                 </div>
                 <?php endif; ?>
            </section>
            <section class="flex flex-col items-center space-x-4 py-2 text-xs md:text-base space-y-2">

                <?php if($user->id != auth()->id()): ?>
                    <?php
                        $isFollower = $user->followers->where('from_id', auth()->id())->where('to_id', $user->id)->first()
                    ?>
                 <button class="btn-xs btn-rounded <?php echo e($isFollower ? 'bg-white text-dark border-2' : 'bg-primary text-white'); ?> " wire:click="toggleFollow">
                    <?php if($isFollower): ?>
                       Following
                    <?php else: ?>
                        Follow
                    <?php endif; ?>
                 </button>
                <?php endif; ?>
                <div>
                    <a href="<?php echo e(route('user.dashboard.followers',['username' => session('username')])); ?>" class="text-sm"><strong><?php echo e($user->followers->count()); ?></strong> Followers</a>
                    <a href="<?php echo e(route('user.dashboard.following',['username' => session('username')])); ?>" class="text-sm"><strong><?php echo e($user->following->count()); ?></strong> Following</a>
                </div>
            </section>
       </section>
   </section>
   <nav class="md:h-16 flex flex-col md:flex-row justify-between container-fluid bg-white ">
        <section  class="flex justify-between items-center space-x-3 py-5 md:py-0">
              <label class="relative cursor-pointer" for="profile-photo-edit" x-data="{ src : ''}">
                <img :src="src ? src : '<?php echo e(asset(auth()->user()->profile_picture_path)); ?>'" 
                 class="relative rounded-full ring-4 ring-white md:-top-[50px] h-[160px] w-[160px] object-cover"
                 />
                 <?php if($user->id == auth()->id()): ?>
                     <i class="las la-camera text-base relative z-10 text-white absolute md:-top-[140px] left-[75px]"></i>
                     <input 
                        type="file" 
                        accept="image/*" 
                        hidden 
                        id="profile-photo-edit"
                        name="photo"
                        wire:model="profilePhoto"
                        x-on:change="
                        src = URL.createObjectURL($event.target.files[0]);"
                      />
                <?php endif; ?>
              </label>
           <div class="md:text-right ">
                <h2 class="font-bold text-lg text-primary leading-none"><?php echo e(ucfirst($user->name)); ?></h2>
                <span class="text-xs">Instructor</span>
           </div>
        </section>
       <ul  class="flex flex-wrap items-center md:justify-end py-2 h-full overflow-hidden">
           <li>
               <a 
                href="<?php echo e(route('user.dashboard.posts',['username' => session('username')])); ?>" 
                class="px-4 py-4 bg-opacity-10 <?php echo e(Request::route()->getName() == 'user.dashboard.posts' ? 'bg-black' : ''); ?>">Posts</a>
           </li>
           <li>
               <a href="<?php echo e(route('user.dashboard.activities',['username' => session('username')])); ?>" 
               class="bg-opacity-10 px-4 py-4 <?php echo e(Request::route()->getName() == 'user.dashboard.activities' ? 'bg-black' : ''); ?>">Activity</a>
           </li>
           <li>
               <a href="<?php echo e(route('user.dashboard.followers',['username' => session('username')])); ?>" 
               class="bg-opacity-10 px-4 py-4 <?php echo e(Request::route()->getName() == 'user.dashboard.followers' ? 'bg-black' : ''); ?>">Followers</a>
           </li>
           <li>
               <a href="#" class="px-4 py-4">More</a>
           </li>
       </ul>
   </nav>



</section><?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/user/dashboard/partials/cover-area.blade.php ENDPATH**/ ?>