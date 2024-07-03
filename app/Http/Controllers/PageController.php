<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getLogin()
    {
        return view('login');
    }

    public function getHome()
    {
        return view('homePage');
    }
}
