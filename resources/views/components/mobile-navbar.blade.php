<section 
class="fixed top-0 bg-opacity-40 bg-dark z-[100] h-screen left-0 w-full" 
x-cloak 
x-transition  
{{-- :class="isMobileNavOpen ? 'w-3/4' : 'w-0 overflow-hidden'" --}}
x-show="isMobileNavOpen"
>
    <div
        x-on:click.outside="isMobileNavOpen = false" 
        class="bg-dark h-full text-white relative z-[500] w-3/4 space-y-3">
        <ul>
            <li class="flex justify-center py-2 px-3">
                <img src="{{asset('images/logo/logo-white.png')}}" class="h-[70px] w-auto" />
            </li>
            <li>
                <a href="#" class="w-full px-5 py-2 block">
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="w-full px-5 py-2 block">
                    Explore
                </a>
            </li>
            <li>
                <a href="#" class="w-full px-5 py-2 block">
                    Listings
                </a>
            </li>
            <li>
                <a href="#" class="w-full px-5 py-2 block">
                    Contacts
                </a>
            </li>
        </ul>

       <section class="space-y-3 px-5">
            <a href="#" class="block border border-primary hover:bg-primary py-3 text-center text-white">Login</a>
            <a href="#" class="block bg-primary py-3 text-center text-white">Sign Up</a>
       </section>
    </div>
</section>