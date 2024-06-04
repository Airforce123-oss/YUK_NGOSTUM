@extends('layout/aplikasi')

@section('konten')

<nav class="p-5 bg-[#038175] shadow md:flex md:items-center md:justify-between h-20" style="margin-bottom: 90px; ">
    <div class="flex justify-between items-center">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <h1 class="h-10 inline" style="color: white">YUK NGOSTUM</h1>
         </span>
         <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu"></ion-icon> 
         </span>
    </div>

    <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute w-full left-0 md:w-auto">
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-white duration-500" style="color: white !important; text-decoration: none; font-size:20px;">Cari Costume Apa?</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Notifikasi</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="#" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Lainnya</a>
        </li>
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white hover:bg-black-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="showDialog()" type="button" style="font-size:20px;">
            Profil
            </button>
</nav>

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        @foreach ($costumes as $costume)
        <div>
            <img src="{{ asset($costume->image) }}" alt="Logo" class="h-16">
        </div>
        @endforeach
        <div class="text-right">
            <h2 class="text-xl font-bold">SURAT PEMESANAN</h2>
            <div class="mt-2">
                <p>No PO: <span class="font-semibold">PO0123-0014</span></p>
                <p>Tanggal: <span class="font-semibold">30-01-2023</span></p>
                <p>Pemesan: <span class="font-semibold">admin pembelian</span></p>
            </div>
        </div>
    </div>

    <div class="flex justify-between mb-6">
        <div>
            <h3 class="text-lg font-semibold">Kepada Yth. :</h3>
            <p>Supplier A</p>
            <p>Telepon:</p>
            <p>Alamat:</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold">Dikirim ke :</h3>
            <p>Outlet Denpasar Nota Ver.</p>
            <p>Telepon: 023920392</p>
            <p>Alamat:</p>
        </div>
    </div>

    <table class="w-full table-auto mb-6">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Barcode</th>
                <th class="px-4 py-2 border">Nama Barang</th>
                <th class="px-4 py-2 border">Jumlah</th>
                <th class="px-4 py-2 border">@Harga</th>
                <th class="px-4 py-2 border">@Diskon</th>
                <th class="px-4 py-2 border">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-4 py-2 border">1</td>
                <td class="px-4 py-2 border">220104105132</td>
                <td class="px-4 py-2 border">Kebaya Mawar XL Merah - Merah</td>
                <td class="px-4 py-2 border">20.0 Potong</td>
                <td class="px-4 py-2 border">Rp 85,000.00</td>
                <td class="px-4 py-2 border">Rp 0.00</td>
                <td class="px-4 py-2 border">Rp 1,700,000.00</td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="bg-gray-200">
                <td colspan="6" class="px-4 py-2 text-right font-semibold border">Total</td>
                <td class="px-4 py-2 border font-semibold">Rp 1,700,000.00</td>
            </tr>
        </tfoot>
    </table>

    <div class="mb-6">
        <h3 class="text-lg font-semibold">Keterangan :</h3>
        <p class="border p-2 h-24"></p>
    </div>

    <div class="flex justify-between mb-6">
        <div class="w-1/2">
            <h3 class="text-lg font-semibold">Penerima</h3>
            <div class="mt-4">
                <p>(_________________)</p>
            </div>
        </div>
        <div class="w-1/2">
            <h3 class="text-lg font-semibold">Riza Hisamuddin</h3>
            <div class="mt-4">
                <p>(_________________)</p>
            </div>
        </div>
    </div>

    <div class="flex justify-end">
        <div class="w-1/3">
            <table class="w-full table-auto">
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border">Sub Total</td>
                        <td class="px-4 py-2 border">Rp 1,700,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border">Beban Angkut</td>
                        <td class="px-4 py-2 border">Rp 26,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border">Potongan</td>
                        <td class="px-4 py-2 border">Rp 0.00</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="px-4 py-2 border font-semibold">Total Faktur</td>
                        <td class="px-4 py-2 border font-semibold">Rp 1,726,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border">Uang Muka</td>
                        <td class="px-4 py-2 border">Rp 500,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border">Sisa Faktur</td>
                        <td class="px-4 py-2 border">Rp 1,226,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection