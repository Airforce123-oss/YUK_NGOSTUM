<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rental;
use App\Models\Costume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    public function bookingPage($id)
    {
        $costume = Costume::findOrFail($id);
        return view('kostum.kostum-booking', compact('costume'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'costume_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'alamat_pengiriman' => 'required',
            'metode_pembayaran' => 'required',
            'metode_pengambilan' => 'required',
        ]);

        $user_id = $request->user()->id;
        $data = array_merge($request->all(), ['user_id' => $user_id]);

        $costume = Costume::findOrFail($request->costume_id);
        $harga = $costume->harga;

        // Menghitung selisih hari antara tanggal mulai dan tanggal akhir penyewaan
        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);
        $days = $end_date->diffInDays($start_date) + 1; // tambahkan 1 untuk menghitung hari inklusif

        // Menghitung jumlah periode, setiap 3 hari adalah satu periode
        $periods = ceil($days / 3);

        // Menghitung subtotal
        $subtotal = $harga * $periods;

        // Menyimpan subtotal ke dalam data
        $data['subtotal'] = $subtotal;

        // Simpan data rental ke database
        $rental = Rental::create($data);

        return redirect(route('bayar.costume', $rental->id));
    }

    public function show($rentalId)
    {
        $rental = Rental::findOrFail($rentalId);
        $subtotal = $rental->subtotal;
        $shipping_cost = 50000; // contoh biaya tetap ongkos kirim
        $service_fee = 10000; // contoh biaya tetap layanan

        // Total pembayaran
        $total_payment = $subtotal + $shipping_cost + $service_fee;

        return view('kostum.checkout-kostum', compact('rental', 'subtotal', 'shipping_cost', 'service_fee', 'total_payment'));
        
    }

    //pay()

    public function showBookingRequest()
    {
        $storeId = auth()->user()->store->id;
        $rentals = Rental::whereHas('costume', function ($query) use ($storeId) {
            $query->where('store_id', $storeId);
        })->with(['user', 'costume'])->get();
        return view('toko.booking-request', compact('rentals'));
    }
    public function rincianTransaksi($rentalId)
    {
        $rental = Rental::findOrFail($rentalId);
        $subtotal = $rental->subtotal;
        $shipping_cost = 50000; // contoh biaya tetap ongkos kirim
        $service_fee = 10000; // contoh biaya tetap layanan

        $rental = Rental::findOrFail($rentalId);
        $total_payment = $subtotal + $shipping_cost + $service_fee;
        return view('toko.rincian-transaksi', compact('rental', 'subtotal', 'shipping_cost', 'service_fee', 'total_payment'));
    }

    public function pembayaranKostum($id)
    {
        $rental = Rental::find($id);
        $subtotal = $rental->subtotal;
        $shipping_cost = 50000; // contoh biaya tetap ongkos kirim
        $service_fee = 10000; // contoh biaya tetap layanan

        $total_payment = $subtotal + $shipping_cost + $service_fee;

        return view('kostum.pembayaran-kostum', compact('rental', 'subtotal', 'shipping_cost', 'service_fee', 'total_payment'));
    }

    public function buktiPembayaran(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);

        if ($request->hasFile('bukti_image')) {

            $bukti_image = $request->file('bukti_image');
            $imageName = time() . '.' . $bukti_image->getClientOriginalExtension();
            $upload_path = 'gambar-kostum/';
            $bukti_image->move(public_path($upload_path), $imageName);

            // Update path gambar baru di database
            $rental->update([
                'bukti_image' => $upload_path . $imageName
            ]);

            return redirect(route('rincian-transaksi',['id' => $rental->id]));
        }
    }

    public function destroy(Request $request)
    {
        $rental = Rental::findOrFail($request->id);
        $rental->delete();

        return response()->json(['message' => 'Rental deleted successfully']);
    }

    public function invoice()
    {
        $rental = Rental::findOrFail($request->id);
        
        //return halaman invoice
        return view('', compact('rental'));
    }
}
