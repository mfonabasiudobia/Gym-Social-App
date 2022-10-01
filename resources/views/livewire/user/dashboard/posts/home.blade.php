<section class="bg-light">

    @livewire('user.partials.header')

    @livewire('user.dashboard.partials.cover-area')

    <section class="container grid md:grid-cols-3 gap-5 my-5 ">
            
      <main class="md:col-span-2 space-y-5 ">
            @foreach ($posts as $post)
                <section class="bg-white border border-gray-100 p-5 space-y-3">
                    <header class="flex items-center justify-start space-x-3">
                        <img src="{{ asset($post->user->profile_picture_path) }}" class="rounded-full w-[50px] h-[50px]" />
                        <div>
                            <h2 class="font-semibold"><a href="#" class="link">{{$post->user->name}}</a></h2>
                            <small>{{$post->timeAgo()}}</small>
                        </div>
                    </header>
                    <section class="text-sm space-y-3">

                     @if($post->photo_path)
                        <img src="{{ asset($post->photo_path) }}">
                     @elseif($post->video_path)
                         <x-show-video path="{{ $post->video_path }}" />
                     @endIf

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
                        @if($post->text)
                         <p>{{$post->text}}</p>
                        @endIf
                    </section>

                 {{--   <section class="space-y-5">
                       
                    <section class="flex items-center space-x-2">
                            <img src="{{ asset('images/user/profile-photo/user-avatar.jpg') }}" class="rounded-full w-[30px] h-[30px]" />
                            <div class="w-full">
                                <input type="text" name="Add a comment..." class="form-control rounded-full border-4 border-gray-100" />
                            </div>
                    </section>

                    <section class="space-y-3">
                        
                   <section class="space-y-3">
                        <main class="flex items-center space-x-2">
                                <img src="{{ asset('images/user/profile-photo/user-avatar.jpg') }}" class="rounded-full w-[30px] h-[30px]" />
                                <div class="w-full bg-gray-page-color rounded-lg p-3 rpunded-lg space-y-2">
                                    <header>
                                        <div class="flex justify-between items-center leading-none">
                                            <strong>
                                                <a href="#">Ogheneovo Akperhe</a> <span class="author-badge">Author</span>
                                            </strong>
                                            <div>
                                                <small>5d</small>
                                                <button>
                                                     <i class="las la-ellipsis-v"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="opacity-80">Mobile App Developer || Dart || Flutter</small>
                                    </header>
                                    <p class="comment-text">
                                        Inspiring and I can see you are developing something with dart on flutter
                                    </p>
                                </div>
                        </main>
                    </section>


                 <section class="space-y-3">
                        <main class="flex items-center space-x-2">
                            <img src="{{ asset('images/user/profile-photo/user-avatar.jpg') }}" class="rounded-full w-[30px] h-[30px]" />
                            <div class="w-full bg-gray-page-color rounded-lg p-3 rpunded-lg space-y-2">
                                <header>
                                    <div class="flex justify-between items-center leading-none">
                                        <strong>
                                            <a href="#">Ogheneovo Akperhe</a>
                                        </strong>
                                        <div>
                                            <small>5d</small>
                                            <button>
                                                 <i class="las la-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <small class="opacity-80">Mobile App Developer || Dart || Flutter</small>
                                </header>
                                <p class="comment-text">
                                    Inspiring and I can see you are developing something with dart on flutter
                                </p>
                            </div>
                        </main>

                     <section class="ml-5 space-y-3">
                        <main>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('images/user/profile-photo/user-avatar.jpg') }}" class="rounded-full w-[30px] h-[30px]" />
                                <div class="w-full bg-gray-page-color rounded-lg p-3 rpunded-lg space-y-2">
                                    <header>
                                        <div class="flex justify-between items-center leading-none">
                                            <strong>
                                                <a href="#">Ogheneovo Akperhe</a>
                                            </strong>
                                            <div>
                                                <small>5d</small>
                                                <button>
                                                     <i class="las la-ellipsis-v"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="opacity-80">Mobile App Developer || Dart || Flutter</small>
                                    </header>
                                    <p class="comment-text">
                                        Inspiring and I can see you are developing something with dart on flutter
                                    </p>
                                </div>
                            </div>
                        </main>

                         <main>
                            <div class="flex items-center space-x-2">
                                <img src="{{ asset('images/user/profile-photo/user-avatar.jpg') }}" class="rounded-full w-[30px] h-[30px]" />
                                <div class="w-full bg-gray-page-color rounded-lg p-3 rpunded-lg space-y-2">
                                    <header>
                                        <div class="flex justify-between items-center leading-none">
                                            <strong>
                                                <a href="#">Ogheneovo Akperhe</a>
                                            </strong>
                                            <div>
                                                <small>5d</small>
                                                <button>
                                                     <i class="las la-ellipsis-v"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="opacity-80">Mobile App Developer || Dart || Flutter</small>
                                    </header>
                                    <p class="comment-text">
                                        Inspiring and I can see you are developing something with dart on flutter
                                    </p>
                                </div>
                            </div>
                        </main>

                    </section>

                      </section>

                    </section>

                   </section> --}}
                </section>


                @endForeach
    </main>

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