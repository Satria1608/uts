<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $travel_packages = TravelPackage::get();
        $posts = Post::take(3)->latest()->get();

        return view('frontend.home', compact('travel_packages', 'posts'));
    }
}
