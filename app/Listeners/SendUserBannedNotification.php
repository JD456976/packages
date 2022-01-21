<?php

namespace App\Listeners;

use App\Events\UserBanned;
use Illuminate\Support\Facades\Mail;

class SendUserBannedNotification
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
     * @param  \App\Events\UserBanned  $event
     * @return void
     */
    public function handle(UserBanned $event)
    {
        Mail::to($event->user->email)->send(new \App\Mail\UserBanned($event->user));
    }
}
