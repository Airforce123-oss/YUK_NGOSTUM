<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costume;
use App\Models\Store;

class TokoController extends Controller
{
    public function previewToko()
    {
        $storeId = auth()->user()->store->id;
        $costumes = Costume::where('store_id', $storeId)->get();
        // $costumes = Costume::all();
        return view('toko.preview-toko', compact('costumes'));
    }

    public function guestPreviewToko($storeId)
{
    $store = Store::findOrFail($storeId);
    $costumes = Costume::where('store_id', $storeId)->get();

    return view('toko.preview-toko', compact('costumes', 'store', 'storeId'));
}
}
