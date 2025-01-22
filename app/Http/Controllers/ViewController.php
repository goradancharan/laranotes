<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('User.index');
    }

    public function laravelInstall()
    {
        return view('User.install');
    }
}

