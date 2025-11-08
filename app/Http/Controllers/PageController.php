<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showCA22062()
    {
        return view('about_CA22062');
    }

    public function showContact()
    {
        return view('contact');
    }
}
