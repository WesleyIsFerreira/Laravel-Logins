<?php

namespace App\Listeners;

use App\Mail\NotificacaoLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //dd($event->user->name);
        info("Login com o Sr." . $event->user->name);
        Mail::to($event->user)
            ->send(new NotificacaoLogin($event->user));
    }
}
