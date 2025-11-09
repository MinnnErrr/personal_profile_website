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

    public function showCD22076()
    {
    return view('about_CD22076');
    }
}
