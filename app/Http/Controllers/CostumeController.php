<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Costume;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Storage;

class CostumeController extends Controller
{
    public function index()
    {
        //$userId = auth()->user()->id;
        $storeId = auth()->user()->store->id;

        // Ambil data kostum yang memiliki store_id sesuai dengan ID pengguna yang sedang login
        $costumes = Costume::where('store_id', $storeId)
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        //mengembalikan view, halaman manajemen kostum
        return view('toko.manajemen-kostum', compact('costumes'));
    }

    public function insert(Request $request)
    {
        
       //$userId = auth()->user()->id;
        $storeId = auth()->user()->store->id;

        $request->validate([
            'nama' => 'required|min:3|unique:costumes,nama',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required|numeric|min:1000'
        ]);

        //$request = request();

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
            $costumes->store_id = $storeId;
            $costumes->save();
        }

        //kembalikan ke halaman manajemen kostum
        return redirect('/manajemen-kostum')->with('success', 'Kostum berhasil ditambahkan.');
    }

    public function tambahCostume()
    {
        //  //$userId = auth()->user()->id;
        //  $storeId = auth()->user()->store->id;

        //  // Ambil data kostum yang memiliki store_id sesuai dengan ID pengguna yang sedang login
        //  $costumes = Costume::where('store_id', $storeId)
        //      ->orderBy('created_at', 'desc')
        //      ->paginate(1);
        //  return view('toko.tambah-kostum', compact('costumes'));
        // //mengembalikan view, form tambah kostum
        return view('toko.tambah-kostum');
    }

    public function update(Request $request)
    {
        $costumes = Costume::findOrFail($request->id);

        $request->validate([
            'nama' => 'required|min:3|unique:costumes,nama,' . $costumes->id,
            'image' => 'sometimes|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required|numeric|min:1000'
        ]);

        if ($request->hasFile('image')) {
            $imageLama = $costumes->image;

            if (Storage::exists($imageLama)) {
                Storage::delete($imageLama);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $upload_path = 'gambar-kostum/';
            $image->move(public_path($upload_path), $imageName);

            // Update path gambar baru di database
            $costumes->image = $upload_path . $imageName;
        }

        $costumes->nama = $request->nama;
        $costumes->deskripsi = $request->deskripsi;
        $costumes->harga = $request->harga;
        $costumes->save();

        // $costumes->update($request->all());
        return redirect('/manajemen-kostum');
    }

    public function updateCostume($id)
    {
        $costumes = Costume::findOrFail($id);
        return view('toko.update-kostum', compact('costumes'));
    }

    public function hapusCostume($id)
    {
        $costumes = Costume::findOrFail($id);
        $costumes->delete();

        return redirect('/manajemen-kostum');
    }
    public function detailCostume($id)
    {
        $costume = Costume::findOrFail($id);
        return view('kostum.kostum-detail', compact('costume'));
    }
 
    public function riwayatTransaksi(Request $request)
    {
        $rental = Rental::with(['costume'])->where('user_id',auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('penyewa.penyewa-riwayatTransaksi', compact('rental'));
    }
}
