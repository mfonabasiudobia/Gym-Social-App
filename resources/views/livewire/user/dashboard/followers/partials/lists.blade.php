<main class="space-y-5">
    @php
        $navItem = "font-medium text-sm block py-3 px-2";
        $active = "border-b-2 border-primary"
    @endphp
    <section class="w-full">
        <header class="bg-white border shadow-lg flex items-center space-x-5">
            <a 
                href="{{route('user.dashboard.followers',['username' => session('username')])}}" 
                class="{{$navItem}} {{AppHelper::exec()->isCurrentRoute('user.dashboard.followers') ? $active : ''}}">
                <strong>{{AppHelper::exec()->getUser()->followers->count()}}</strong> Followers
            </a>

            <a 
                href="{{route('user.dashboard.following',['username' => session('username')])}}" 
                class="{{$navItem}} {{AppHelper::exec()->isCurrentRoute('user.dashboard.following') ? $active : ''}}">
                <strong>{{AppHelper::exec()->getUser()->following->count()}}</strong> Following
            </a>
        </header>

        {{-- <section class="flex items-center space-x-1">
            <input type="text" placeholder="Enter a username or email address to follow" class="w-full form-control" />
            <button class="btn btn-primary btn-lg ">Follow</button>
        </section> --}}
    </section>

</main>