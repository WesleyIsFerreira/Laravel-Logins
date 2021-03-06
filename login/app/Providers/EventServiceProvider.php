<?php

namespace App\Providers;

use App\Events\HomeEvent;
use App\Listeners\HomeEventListener;
use App\Listeners\LoginListener;
use App\Listeners\NewHomeEventListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        HomeEvent::class => [
            HomeEventListener::class,
            NewHomeEventListener::class,
        ],
        Login::class => [
            LoginListener::class,
        ]

        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
