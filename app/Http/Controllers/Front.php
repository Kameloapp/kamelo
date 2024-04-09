<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
    public function home()
    {
        return view('components/front/home');
    }

    public function signin()
    {
        return view('components/front/signin');
    }
}