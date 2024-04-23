<?php

namespace App\Http\Controllers;

use App\Models\Costume;
use Illuminate\Http\Request;

class CostumeController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
    
    // Ambil data kostum yang memiliki store_id sesuai dengan ID pengguna yang sedang login
        $costumes = Costume::where('store_id', $userId)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(4);
        //mengembalikan view, halaman manajemen kostum
        return view('toko.manajemen-kostum', compact('costumes'));
    }

    public function tampilanDashboard()
    {
    // Ambil data kostum yang memiliki store_id sesuai dengan ID pengguna yang sedang login
        $costumes = Costume::all();


        //mengembalikan view, halaman manajemen kostum
        return view('sesi.dashboard', compact('costumes'));
    }

    public function insert(Request $request)
    {
        $userId = auth()->user()->id;

        $request->validate([
            'nama' => 'required|min:3|unique:costumes,nama',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required|numeric|min:1000'
        ]);

        $request = request();

    // Ambil file gambar
    $image = $request->file('image');
    
    if ($image) {
        // Buat nama file unik dengan ekstensi asli
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // Tentukan path penyimpanan
        $upload_path = 'gambar-kostum/';
        
        // Pindahkan file ke path penyimpanan
        $image->move($upload_path, $imageName);
        
        // Simpan informasi kostum ke dalam database
        $costumes = new Costume();
        $costumes->nama = $request->nama;
        $costumes->image = $upload_path . $imageName;
        $costumes->deskripsi = $request->deskripsi;
        $costumes->harga = $request->harga;
        $costumes->store_id = $userId;
        $costumes->save();
    }

        //kembalikan ke halaman manajemen kostum
        return redirect('/manajemen-kostum')->with('success', 'Kostum berhasil ditambahkan.');
    }

    public function tambahCostume()
    {
        //mengembalikan view, form tambah kostum
        return view('toko.tambah-kostum');
    }
}
