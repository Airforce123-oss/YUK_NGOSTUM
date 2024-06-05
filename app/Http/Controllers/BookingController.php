<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Costume;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    // public function checkout(Request $request, $rentalId)
    // {
    //     // Validasi data tambahan yang diperlukan
    //     $request->validate([
    //         'alamat_pengiriman' => 'required',
    //         'metode_pembayaran' => 'required',
    //         'metode_pengambilan' => 'required',
    //     ]);

    //     // Ambil data rental berdasarkan ID
    //     $rental = Rental::findOrFail($rentalId);

    //     // Update atau tambahkan data tambahan ke rental
    //     $rental->alamat_pengiriman = $request->alamat_pengiriman;
    //     $rental->metode_pembayaran = $request->metode_pembayaran;
    //     $rental->cara_pengambilan = $request->cara_pengambilan;
    //     $rental->save();

    //     // Redirect pengguna ke halaman konfirmasi atau pembayaran
    //     return redirect()->route('konfirmasi.pembayaran');
    // }

    public function show($rentalId)
    {
        $rental = Rental::findOrFail($rentalId);
        $subtotal = $rental->subtotal;
        $shipping_cost = 50000; // contoh biaya tetap ongkos kirim
        $service_fee = 10000; // contoh biaya tetap layanan

        // Total pembayaran
        $total_payment = $subtotal + $shipping_cost + $service_fee;

        return view('kostum.pembayaran-kostum', compact('rental', 'subtotal', 'shipping_cost', 'service_fee', 'total_payment'));
    }

    public function showBookingRequest()
    {
        $storeId = auth()->user()->store->id;
        $rentals = Rental::with(['user','costume'])->get();
        return view('toko.booking-request', compact('rentals'));
    }
}
