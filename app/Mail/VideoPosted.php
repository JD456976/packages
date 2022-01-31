<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideoPosted extends Mailable
{
    public $video;
    public $user;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Video $video, User $user)
    {
        $this->video = $video;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.videos.posted', [
            'url' => route('video.show', $this->video->slug),
            'profile' => route('user.show', $this->video->user->id)
        ]);
    }
}
