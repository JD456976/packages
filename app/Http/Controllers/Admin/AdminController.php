<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use App\Models\Video;

use function view;

class AdminController extends Controller
{

    public function dashboard()
    {
        $reported = Report::allReported();
        $pending = Video::pending();
        $totalUsers = User::count();
        $banned = User::banned();
        $unbanned = User::unbanned();
        $approved = Video::approved();

        return view('admin.dashboard', compact('pending', 'totalUsers', 'banned', 'unbanned', 'approved','reported'));
    }
}
