<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function recruitmentPage()
    {
        return view('recruitment');
    }
}
