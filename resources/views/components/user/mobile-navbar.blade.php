<section 
class="fixed top-0 left-0 bg-opacity-40 w-screen bg-dark z-[100] overflow-hidden h-screen" 
{{-- x-transition --}}
x-cloak
{{-- :class="isMobileNavOpen ? 'w-screen ' : 'w-0'" --}}
x-show="isMobileNavOpen"
>

@php
    $navItem = "w-full px-5 py-2 block space-x-3";
@endphp
    <div
        x-on:click.away="isMobileNavOpen = false" 
        class="bg-dark h-full text-white relative z-[500] w-3/4 space-y-3">

        <ul>
            <li class="flex justify-center py-2 px-3">
                <img src="{{asset('images/logo/logo-white.png')}}" class="h-[70px] w-auto" />
            </li>
             <li class="flex justify-center py-2 px-3">
                <button 
                    x-on:click="isPostOpen = !isPostOpen; isMobileNavOpen = false"
                    href="{{route('user.dashboard.posts',['username' => 'me'])}}" 
                    class="block bg-primary py-3 text-center text-white px-5 rounded-lg">
                        <IconLarge class="las la-pen"></IconLarge> Create a Post
                </button>
            </li>
            <li>
                <a href="{{route('user.feed')}}" class="{{$navItem}}">
                    <IconLarge class="las la-home"></IconLarge> <span>Feed</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.dashboard.messages',['username' => 'me'])}}" class="{{$navItem}}">
                    <IconLarge class="las la-sms"></IconLarge> <span>Messaging</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.dashboard.notifications',['username' => 'me'])}}" class="{{$navItem}}">
                    <IconLarge class="las la-bell"></IconLarge> <span>Notification</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.dashboard.messages',['username' => 'me'])}}" class="{{$navItem}}">
                   <IconLarge class="las la-tasks"></IconLarge> <span> Activity</span>
                </a>
            </li>
            <li>
                <a href="#" class="{{$navItem}}">
                   <IconLarge class="las la-heart"></IconLarge> <span> Likes</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.dashboard.followers',['username' => 'me'])}}" class="{{$navItem}}">
                    <IconLarge class="las la-user-friends"></IconLarge> <span>Following</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.dashboard.messages',['username' => 'me'])}}" class="{{$navItem}}">
                   <IconLarge class="las la-cog"></IconLarge> <span>Settings</span>
                </a>
            </li>
        </ul>

    </div>
</section>