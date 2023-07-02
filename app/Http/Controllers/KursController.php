<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cource;

class KursController extends Controller
{
    public function index()
    {
        $cources = Cource::all();

        return view('courses', compact('cources'));
    }
}
