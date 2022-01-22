<?php

namespace App\Listeners;

use App\Events\VideoApprovedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class VideoApprovedNotification
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
     * @param  \App\Events\VideoApprovedEvent  $event
     * @return void
     */
    public function handle(VideoApprovedEvent $event)
    {
        Mail::to($event->video->user->email)->send(new \App\Mail\VideoApproved($event->video));
    }
}
