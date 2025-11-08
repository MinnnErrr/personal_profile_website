<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
    
    public function showCA22062()
    {
        return view('about_CA22062');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showCB24017()
    {
    return view('about_CB24017');
    }
}
