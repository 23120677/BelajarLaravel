<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => 'Home',
            'active' => 'about',
            "name" => 'Husein Alfarizi',
            "email" => 'huseinalfaa.17@gmail.com',
            "image" => 'ava.png'
        ]);
    }
}
