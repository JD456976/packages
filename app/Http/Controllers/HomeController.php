<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSentRequest;
use App\Http\Requests\SearchRequest;
use App\Mail\ContactForm;
use App\Models\Page;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $recent = Video::recent();
        $hot = Video::hot();
        return view('frontend.home', compact('recent', 'hot'));
    }

    public function search(SearchRequest $request)
    {
        $query = $request->input('query');

        $videos = Video::search($query)->take(10)->get();

        return view('frontend.search', compact('videos','query'));
    }

    public function showContact()
    {
        return view('frontend.contact');
    }

    public function sendContact(ContactSentRequest $request)
    {
        Mail::to('admin@packagethieves.com')->send(new ContactForm($request));

        Alert::success('Thank You!', 'Your message has been sent!');

        return redirect(route('home'));
    }

    public function page($slug)
    {
        $recent = Video::recent();

        $page = Page::where('slug',$slug)->first();

        return view('frontend.page', compact('page', 'recent'));
    }
}
