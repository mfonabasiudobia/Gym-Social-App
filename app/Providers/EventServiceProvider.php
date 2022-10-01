<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\MinimumQuantityNotificationEvent;
use App\Listeners\MinimumQuantityNotificationListener;

class EventServiceProvider extends ServiceProvider
{
   
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class
        ],
        MinimumQuantityNotificationEvent::class => [
            MinimumQuantityNotificationListener::class
        ]
    ];


}
