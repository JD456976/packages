<?php

namespace App\Listeners;

use App\Events\FirstVideoPosted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendFirstVideoNotification
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
     * @param  \App\Events\FirstVideoPosted  $event
     * @return void
     */
    public function handle(FirstVideoPosted $event)
    {
        Mail::to($event->user->email)->send(new \App\Mail\FirstVideoPosted($event->user));
    }
}
