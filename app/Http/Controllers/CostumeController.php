<?php

namespace App\Http\Controllers;

use App\Models\Costume;
use Illuminate\Http\Request;

class CostumeController extends Controller
{
    public function index()
    {
        $costumes = Costume::all();
        $costumes = Costume::paginate(8);

        //mengembalikan view, halaman manajemen kostum
        return view('toko.manajemen-kostum', compact('costumes'));
    }

    public function insert(Request $request)
    {
        $rules = [
            'nama' => 'required|min:3',
            'image' => 'required',
            'deskripsi' => 'reqired',
            'harga' => 'required|numbers|min:1000'
        ];

        $request = request();
        $image = $request->file('image');

        $imageSaveAs = $image->getClientOriginalExtension();

        $upload_path = 'image/';
        $costume_image = $upload_path.$imageSaveAs;
        $success = $image->move($upload_path, $imageSaveAs);

        $costumes = new Costume();
        $costumes->nama = $request->nama;
        $costumes->image = $costume_image;
        $costumes->deskripsi = $request->deskripsi;
        $costumes->harga = $request->harga;
        $costumes->save();

        //kembalikan ke halaman manajemen kostum
    }

    public function tambahCostume()
    {
        //mengembalikan view, form tambah kostum
        return view('toko.tambah-kostum');
    }
}
