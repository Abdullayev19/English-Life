<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisors;

class AdvisorsController extends Controller
{
    public function index()
    {
        $advisors = Advisors::all();

        return view('advisors', compact('advisors'));
    }
}
