<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
    function index()
    {
        return view("LandingPage/landing_page");
    }
}
