<?php

namespace App\Listeners;

use App\Events\UserUnbanned;
use Illuminate\Support\Facades\Mail;

class SendUserUnbannedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserUnbanned  $event
     * @return void
     */
    public function handle(UserUnbanned $event)
    {
        Mail::to($event->user->email)->send(new \App\Mail\UserUnbanned($event->user));
    }
}
