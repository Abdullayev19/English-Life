<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function index()
    {
        return view('contact');
    }




    public function store(Request $request){
        

        $message=<<<TEXT
        Sizga yangi murojat qoldirildi☺

        Murojatchining ismi: {$request->name}

        Murojatchining Email manzili: {$request->email}

        Murojatchining telefon raqami: {$request->phone}

        Murojatchining xabari: {$request->comments}

        TEXT;

        $apiToken = "5407721179:AAE91b3mZdJgtkOogeY9_ztfFbjlM34iumw";

        $data = [
            'chat_id' => "-1001733108009",
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .http_build_query($data));

        $data=$request->all();
        return back();

    }
}
