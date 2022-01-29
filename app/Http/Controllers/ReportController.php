<?php

namespace App\Http\Controllers;

use App\Events\ReportReceivedEvent;
use App\Http\Requests\ReportStoreRequest;
use App\Http\Requests\ReportUpdateRequest;
use App\Models\Comment;
use App\Models\Report;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reports = Report::all();

        return view('report.index', compact('reports'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('report.create');
    }

    /**
     * @param \App\Http\Requests\ReportStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportStoreRequest $request, $id)
    {

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Report $report
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Report $report)
    {
        return view('report.show', compact('report'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Report $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Report $report)
    {
        return view('report.edit', compact('report'));
    }

    /**
     * @param \App\Http\Requests\ReportUpdateRequest $request
     * @param \App\Models\Report $report
     * @return \Illuminate\Http\Response
     */
    public function update(ReportUpdateRequest $request, Report $report)
    {
        $report->update($request->validated());

        $request->session()->flash('report.id', $report->id);

        return redirect()->route('report.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Report $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Report $report)
    {
        $report->delete();

        return redirect()->route('report.index');
    }

    public function video(ReportStoreRequest $request, $id)
    {
        $report = new Report();
        $video = Video::find($id);;

        $report->reason = $request->reason;
        $report->comment = $request->comment;
        $report->user_id = Auth::user()->id;

        $video->reports()->save($report);

        event(new ReportReceivedEvent($report));

        Alert::success('Success!', 'Report successfully submitted');

        return redirect()->back();
    }

    public function comment(ReportStoreRequest $request, $id)
    {
        $report = new Report();
        $comment = Comment::find($id);

        $report->reason = $request->reason;
        $report->comment = $request->comment;
        $report->user_id = Auth::user()->id;

        $comment->reports()->save($report);

        event(new ReportReceivedEvent($report));

        Alert::success('Success!', 'Report successfully submitted');

        return redirect()->back();
    }
}
