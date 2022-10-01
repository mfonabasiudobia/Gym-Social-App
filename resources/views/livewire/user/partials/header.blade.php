   <section 
    x-data="{ showBar : false, isMobileNavOpen : false, isPostOpen : false }" 
    @scroll.window="showBar = (window.pageYOffset > 20) ? true : false"
    :class="showBar ? 'shadow-lg fixed top-0 left-0 z-50' : 'border-b'"
    class="w-full  bg-white text-dark ">

    @php
        $navItem = "flex flex-col font-semibold  justify-center items-center px-4 h-full"
    @endphp
        <nav class="container-fluid grid grid-cols-2 gap-x-5">
            <div class="flex items-center space-x-3 py-2">
                <a href="{{route('home')}}"><img src="{{asset('images/logo/logo-dark.png')}}" class="h-[60px] w-auto" /></a>
            </div>
            
            <section class="h-full flex items-center justify-end">
                 <ul class="hidden md:flex items-center justify-end h-full">
                    <li class="h-full">
                        <a href="{{route('user.feed')}}" 
                        class="{{$navItem}}">
                            <i class="las la-home text-xl"></i>
                            <span class="text-xs">Home</span>
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="{{route('user.dashboard.messages',['username' => 'me'])}}" 
                        class="{{$navItem}} {{Request::route()->getName() == 'user.dashboard.messages' ? 'border-b-4 ' : ''}}">
                            <i class="las la-sms text-xl"></i>
                            <span class="text-xs">Messaging</span>
                        </a>
                    </li>

                    <li class="h-full">
                        <a href="{{route('user.dashboard.notifications',['username' => 'me'])}}" 
                        class="{{$navItem}} {{Request::route()->getName() == 'user.dashboard.notifications' ? 'border-b-4 ' : ''}}">
                            <i class="las la-bell text-xl"></i>
                            <span class="text-xs">Notifications</span>
                        </a>
                    </li>

                    <li class="h-full relative" x-data="{show : false }">
                        <a 
                            x-on:click="show = !show"
                            href="javascript:void(0)" 
                            class="{{$navItem}}">
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
                            <a href="{{route('user.logout')}}">Log out</a>
                        </header>
                        <main class="max-h-[400px] overflow-y-auto text-sm">
                            <ul>
                                 <li>
                                    <a href="{{route('user.dashboard.posts',['username' => 'me'])}}" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
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
                                    <a href="{{route('user.dashboard.followers',['username' => 'me'])}}" class="hover:bg-light flex items-center space-x-2 block py-2 px-3">
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
        <x-user.mobile-navbar />
        @livewire("user.partials.create-post")
        @livewire("user.partials.modal.create-post")
    </section>