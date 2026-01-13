<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $solutions = Post::where('category_id', Post::SOLUTION)->where('status', Post::STATUS_PUBLISHED)->get();
        $parners = Partner::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
        return view('home', compact('solutions', 'parners'));
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
        $parners = Partner::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
        return view('partner', compact('parners'));
    }

    public function partnerDetail($slug) {
        $partners = Partner::where('slug', $slug)->firstOrFail();

        return view('partner-detail', compact('partners'));
    }
    public function postPage($slug) 
    {
        $post = Post::withFullRelations()->where('slug', $slug)->firstOrFail();
        $post->increment('view_count');
        
        return view('post', compact('post'));
    }
}
