<section>

    @livewire('user.partials.header')

    <section class="container grid md:grid-cols-3 gap-5 my-5 ">
            

            @livewire("user.dashboard.timeline.home")

            <section class="space-y-5 relative ">


            <section>
                 <header class="font-medium">Recommended</header>
              <main class="bg-white border space-y-5 p-3 py-5">
                   
                        <section class="flex space-x-3">
                            <img src="{{asset('images/user/profile-photo/user-avatar.jpg')}}" class="w-[40px] h-[40px] rounded-full" />
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
                            <img src="{{asset('images/user/profile-photo/user-avatar.jpg')}}" class="w-[40px] h-[40px] rounded-full" />
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

            
            <x-user.footer />

            </section>

    </section>

</section>