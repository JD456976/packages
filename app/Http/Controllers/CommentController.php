<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Mail\CommentPosted;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function store(CommentRequest $request, $id)
    {
        $comment = new Comment();
        $video = Video::find($id);

        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;

       $video->comments()->save($comment);

        if ($video->user->send_comments == 1)
        {
            Mail::to($video->user->email)->send(new CommentPosted($video));
        }

        Alert::success('Success!', 'Comment Posted');

        return redirect()->back();
    }
}
