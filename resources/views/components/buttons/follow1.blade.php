 @php
        $isFollower = AppHelper::exec()->getUserById($userId)->followers->where('from_id', auth()->id())->where('to_id', $userId)->first()
@endphp

<button class="btn-xs btn-rounded {{$isFollower ? 'bg-white text-dark border-2' : 'bg-primary text-white'}} " x-on:click="$wire.emit('toggleFollow', {{$userId}})">
    @if($isFollower) Following @else Follow @endIf
 </button>