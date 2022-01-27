<?php

namespace App\Http\Controllers;

use App\Events\FirstVideoPosted;
use App\Events\VideoPosted;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\VideoStoreRequest;
use App\Http\Requests\VideoUpdateRequest;
use App\Mail\CommentPosted;
use App\Models\Report;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Stevebauman\Location\Facades\Location;


class VideoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $videos = Video::where('is_approved',1)->get();

        return view('frontend.videos.index', compact('videos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::check()) {
            $location = Location::get();

            return view('frontend.videos.create', compact('location'));
        }
        else {
            Alert::error('Whoops!', 'You must be logged in to upload a video.');

            return redirect(route('login'));
        }
    }

    /**
     * @param \App\Http\Requests\VideoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoStoreRequest $request)
    {
        $video = new Video();
        $user = User::find(Auth::user())->first();

        if(Video::count() <= 1)
        {
            event(new FirstVideoPosted($user));
        }
        else {
            $video->is_approved = 1;
        }

        $video->title = $request->title;
        $video->zip = $request->zip;
        $video->content = $request->content;
        $video->user_id = Auth::user()->id;


        $video
            ->addMedia($request->file)
            ->toMediaCollection('videos');

        $video->save();

        if (!empty($request->tags))
        {
            $video->tag($request->tags);
        }

        event(new VideoPosted($video));

        Alert::success('Success','Video successfully added!');

        return redirect(route('video.show', $video->slug));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {

        $related = Video::isTagged()->get();
        $video = Video::where('slug', $slug)->first();
        $reported = Report::reported($video);
        $histories = $video->revisionHistory;
        $comments = $video->comments;

        views($video)->record();

        return view('frontend.videos.show', compact('video','comments','related','histories','reported'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Video $video)
    {
        $location = Location::get();
        return view('frontend.videos.edit', compact('video','location'));
    }

    /**
     * @param \App\Http\Requests\VideoUpdateRequest $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(VideoUpdateRequest $request, Video $video)
    {
        $video->title = $request->title;
        $video->content = $request->content;
        $video->zip = $request->zip;

        if (!empty($request->tags))
        {
            $video->retag($request->tags);
        }

        $video->update();

        Alert::success('Success', 'Video Updated!');

        return redirect()->route('video.show', $video->slug);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        Alert::danger('Success', 'Video Deleted!');

        return redirect()->route('video.index');
    }

    public function tag($tag)
    {
        $videos = Video::withAnyTags(['tag' => $tag])->get();

        return view('frontend.videos.tag', compact('videos','tag'));
    }

    public function search($query)
    {
        $videos = Video::where('zip', $query)->get();

        return view('frontend.search', compact('videos', 'query'));
    }

    public function comment(CommentRequest $request, $video)
    {
        $video = Video::find($video);
        $video->comment($request->comment);

        if ($video->user->send_comments == 1)
        {
            Mail::to($video->user->email)->send(new CommentPosted($video));
        }

        Alert::success('Success', 'Comment Added!');

        return redirect()->back();
    }
}
