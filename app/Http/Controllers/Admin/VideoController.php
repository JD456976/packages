<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminVideoUpdateRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.videos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminVideoUpdateRequest $request, Video $video)
    {
        $video->title = $request->title;
        $video->slug = $request->slug;
        $video->zip = $request->zip;

        $video->update();

        Alert::success('Success!', 'Video Updated Successfully');

        return redirect(route('admin.videos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        Alert::error('Success!', $video->title . ' has been deleted');

        return redirect(route('admin.videos.index'));
    }

    public function feature($id)
    {
        $video = Video::find($id);

        $video->is_featured = 1;

        $video->update();

        Alert::success('Success!','Video Featured!');

        return redirect(route('admin.videos.index'));
    }

    public function unfeature($id)
    {
        $video = Video::find($id);

        $video->is_featured = 0;

        $video->update();

        Alert::success('Success!','Video Unfeatured!');

        return redirect(route('admin.videos.index'));
    }
}
