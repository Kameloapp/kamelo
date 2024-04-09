<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Films extends Controller
{
    public function item()
    {
        return view('components/films/item');
    }

    public function popular()
    {
        return view('components/films/list');
    }
}
