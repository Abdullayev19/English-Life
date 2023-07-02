<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About1;
use App\Models\AboutVideo;
use App\Models\DetailedVideo;
use App\Models\Gallery;
use App\Models\LearnMore;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About1::all();
        $videos = AboutVideo::all();
        $detals = DetailedVideo::all();
        $galleries = Gallery::all();
        $mores = LearnMore::all();

        return view('about', compact('abouts', 'videos', 'detals', 'galleries', 'mores'));
    }
}
