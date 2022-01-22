<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use function view;

class AdminController extends Controller
{

    public function dashboard()
    {
        $pending = Video::pending();
        dd($pending);
        return view('admin.dashboard', compact('pending'));
    }
}
