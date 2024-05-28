<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costume;

class tokoController extends Controller
{
    public function previewToko()
    {
        $costumes = Costume::all();
        return view('toko.preview-toko', compact('costumes'));
    }
}
