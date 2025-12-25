<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $user = auth()->user();

        return view('admin.dashboard', compact('user'));
    }

    public function notFound()
    {
        return view('admin.not-found');
    }
}
