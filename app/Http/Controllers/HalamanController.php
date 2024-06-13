<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costume;

class HalamanController extends Controller
{
    public function landingPage()
    {
        return view("LandingPage/landing_page");
    }

    public function Homepage()
    {
        // Ambil data kostum yang memiliki store_id sesuai dengan ID pengguna yang sedang login
        $costumes = Costume::all();

        //mengembalikan view, halaman manajemen kostum
        return view('sesi.homePage', compact('costumes'));
    }
}
