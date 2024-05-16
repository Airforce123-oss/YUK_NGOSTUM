<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPageController extends Controller
{
    function landingPage()
    {
        return view("LandingPage/landing_page");
    }
}
