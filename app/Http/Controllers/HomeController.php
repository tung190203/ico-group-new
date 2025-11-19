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

    public function introductionPage()
    {
        return view('introduction');
    }

    public function servicePage() 
    {
        return view('service');
    }
    public function partnerPage() 
    {
        return view('partner');
    }
    public function postPage() 
    {
        return view('post');
    }
}
