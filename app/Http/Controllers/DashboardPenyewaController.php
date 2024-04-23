<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPenyewaController extends Controller
{
    function index()
    {
        return view('Penyewa/dashboard-penyewa');
    }
}
