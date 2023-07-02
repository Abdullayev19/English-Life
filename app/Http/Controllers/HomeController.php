<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Advisors;
use App\Models\Blog;
use App\Models\Cource;
use App\Models\About1;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About1::all();
        $advisors = Advisors::all();
        $clients = Client::all();
        $blogs = BLog::latest()->limit(3)->get();
        $cources = Cource::latest()->limit(3)->get();

        return view('welcome', compact('sliders', 'advisors', 'blogs', 'cources', 'abouts', 'clients'));
    }
}
