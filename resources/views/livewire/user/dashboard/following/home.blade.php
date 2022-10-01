<section>

    @livewire('user.partials.header')

    <section class="container my-5 space-y-5">

            @livewire("user.dashboard.followers.partials.lists")

            @if($followers->total() == 0)
               <div class="text-center py-5">No Followers Found</div>
            @endIf
            <wrapper class="grid md:grid-cols-6 border rounded-xl bg-white">
                  @foreach ($followers as $follower)
                     <section class="border-b md:border-r">
                        <section class="p-3 space-y-1 flex md:flex-col items-center justify-between md:justify-center">
                           <img src="{{asset($follower->follower->profile_picture_path)}}" class="rounded-full w-[50px] h-[50px] md:w-[100px] md:h-[100px]" />
                           <div class="flex-1 p-2 md:flex md:flex-col md:items-center space-y-1">
                              <a href="{{route('user.dashboard',['username' => $follower->follower->unique_name])}}" class="font-medium text-sm md:text-base">{{ucfirst($follower->follower->name)}}</a>
                              <p class="text-xs md:text-sm opacity-70">Instructor</p>
                              <hr class="w-1/3 hidden md:block" />
                              <div class="text-xs opacity-50">{{$follower->follower->followers->count()}} followers</div>
                           </div>
                           <hr />
                           <div>
                             <x-buttons.follow1 userId="{{$follower->to_id}}"/>
                           </div>
                        </section>
                     </section>
                  @endforeach
            </wrapper>

    </section>

</section>