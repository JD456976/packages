<?php

namespace App\Listeners;

use App\Events\VideoPosted;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;

class SendNewVideoNotification
{
    public $video;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\VideoPosted  $event
     * @return void
     */
    public function handle(VideoPosted $event)
    {


        $users = User::where('send_videos',1)->where('zip', $event->video->zip)->get();

        foreach ($users as $user)
        {
            Mail::to($user->email)->send(new \App\Mail\VideoPosted($event->video,$user));
        }
    }
}
