<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.layouts.master');

    }

    public function facebook()
    {
        return view('website.pages.facebook');
    }

    public function twitter()
    {
        return view('website.pages.twitter');
    }
}
