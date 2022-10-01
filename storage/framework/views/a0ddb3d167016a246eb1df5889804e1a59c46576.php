<wrapper 
    x-cloak
    x-data="{ showBar : false, isMobileNavOpen : false, innerHeight : window.innerHeight - 100, pageYOffset : 0  }"
    @scroll.window="showBar = (window.pageYOffset >  innerHeight) ? true : false; pageYOffset = window.pageYOffset;">
     <header 
        :class="isMobileNavOpen ? 'bg-transparent fixed text-white px-5' : showBar ? 'bg-white fixed shadow-lg text-dark px-5' : 'bg-transparent  relative text-white'"
        class="flex items-center top-0 left-0 z-50  h-auto w-full">
                    <button 
                        x-on:click="isMobileNavOpen = !isMobileNavOpen"
                        class="absolute top-1/3 md:hidden">
                         <IconLarge :class="isMobileNavOpen ? 'las la-times' : 'las la-bars'" /> 
                    </button>

                    <ul class="hidden md:flex items-center font-semibold py-8">
                        <li>
                            <a href="#" class="block px-5">Mission</a>
                        </li>
                        <li>
                            <a href="#" class="block px-5">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="block px-5">Labs</a>
                        </li>
                    </ul>
                  

                   <img :src="showBar && !isMobileNavOpen ? '<?php echo e(asset('images/logo/logo-dark.png')); ?>' : '<?php echo e(asset('images/logo/logo-white.png')); ?>'" class="logo md:absolute top-0 scale-75 left-0 right-0 m-auto" /> 

    </header>

     <container-fluid 
        x-cloak 
        class="z-10 fixed h-screen w-screen pt-[90px] bg-black overflow-hidden transition-all md:hidden top-0" 
        x-transition
        :class="isMobileNavOpen ? 'left-0' : '-left-full'">
      <ul>
            <template x-for="item in ['Mission', 'Careers', 'Labs']">
                <li>
                    <a href="#" 
                        class="font-title text-[40px] border-b p-[7px] block text-white font-bold text-white" 
                        x-text="item"></a>
                  </li>
            </template>
      </ul>
    </container-fluid>

</wrapper> <?php /**PATH C:\xampp\htdocs\gym-social-media\resources\views/livewire/partials/header/home.blade.php ENDPATH**/ ?>