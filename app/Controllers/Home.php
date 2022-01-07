<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function sedotwc()
    {
        return view('sedotwc');
    }

    public function torenair()
    {
        return view('torenair');
    }

    public function knalpot()
    {
        return view('knalpot');
    }

    public function artikel()
    {
        return view('artikel');
    }
}
