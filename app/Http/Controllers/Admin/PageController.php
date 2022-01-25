<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use function redirect;
use function view;

class PageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pages = Page::active();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.pages.create');
    }

    /**
     * @param \App\Http\Requests\PageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageStoreRequest $request)
    {
        $page = new Page();

        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->main_menu = $request->has('main_menu');
        $page->footer_menu = $request->has('footer_menu');
        $page->is_active = $request->has('is_active');

        $page->save();

        Alert::success('Success!','Page Created Successfully');

        return redirect()->route('admin.page.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Page $page)
    {
        return view('pages.show', compact('page'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * @param \App\Http\Requests\PageUpdateRequest $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageUpdateRequest $request, Page $page)
    {
        $page = Page::find($page->id);

        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->main_menu = $request->has('main_menu');
        $page->footer_menu = $request->has('footer_menu');
        $page->is_active = $request->has('is_active');

        $page->update();

        Alert::success('Success!','Page Updated Successfully');

        return redirect()->route('admin.page.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Page $page)
    {
        $page->delete();

        Alert::error('Success!','Page Deleted Successfully');

        return redirect()->route('admin.page.index');
    }

    public function activate($id)
    {
        $page = Page::find($id);

        $page->is_active = 1;

        $page->update();

        Alert::success('Success!','Page Activated Successfully');

        return redirect()->route('admin.page.index');
    }

    public function deactivate($id)
    {
        $page = Page::find($id);

        $page->is_active = 0;

        $page->update();

        Alert::error('Success!','Page Deactivated Successfully');

        return redirect()->route('admin.page.index');
    }
}
