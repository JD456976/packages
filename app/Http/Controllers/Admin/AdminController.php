<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use function view;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
