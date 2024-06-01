<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costume;

class tokoController extends Controller
{
    public function previewToko()
    {
        $userId = auth()->user()->id;
        $costumes = Costume::where('store_id', $userId)->get();
        // $costumes = Costume::all();
        return view('toko.preview-toko', compact('costumes'));
    }

    public function guestPreviewToko()
    {

    }
}
