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

<main class="p-5" style="margin-top: -5%;">
    <div class="mb-4">
        <h2 class="text-2xl font-semibold text-green-800 text-center">CHECKOUT</h2>
    </div>
    <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 d-flex flex-column justify-content-left right-pane">
                    <h3 class="text-lg font-bold text-red-500 mb-2">Alamat Pengiriman</h3>
                    <h3 class="text-lg text-black mb-2">{{ $rental->alamat_pengiriman }}</h3>
                    
                        <div>
                            <h3 class="text-lg font-bold text-red-500 mb-2">Nama Kostum</h3>
                            <h3 class="text-lg text-black mb-2">{{ $rental->costume->nama }}</h3>
                            <h3 class="text-lg font-bold text-red-500 mb-2">Metode Pembayaran</h3>
                            <h3 class="text-lg text-black mb-2">{{ $rental->metode_pembayaran }}</h3>
                            <h3 class="text-lg font-bold text-red-500 mb-2">Metode Pengambilan</h3>
                            <h3 class="text-lg text-black mb-2">{{ $rental->metode_pengambilan }}</h3>
                        </div>
                </div>
                    <div class="col-md-4 mx-auto text-center border border-dark border-3 w-30 h-30 bg-gray-200 flex items-left justify-center">
                        <img class="text-gray-500 rounded-xl" src="{{ asset($rental->costume->image) }}"></img>
                    </div>
            </div>
        </div>

      
        <div class="bg-white p-4 rounded-lg shadow-md">
            <p class="flex justify-between text-gray-700">
                <span>Subtotal untuk Produk:</span>
                <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
            </p>
            <p class="flex justify-between text-gray-700">
                <span>Total Ongkos Kirim:</span>
                <span>Rp {{ number_format($shipping_cost, 0, ',', '.') }}</span>
            </p>
            <p class="flex justify-between text-gray-700">
                <span>Biaya Layanan:</span>
                <span>Rp {{ number_format($service_fee, 0, ',', '.') }}</span>
            </p>
            <p class="flex justify-between text-red-500 font-bold text-lg">
                <span>Total Pembayaran:</span>
                <span>Rp {{ number_format($total_payment, 0, ',', '.') }}</span>
            </p>
        </div>
        <div class="mt-4">
            <button class="bg-green-600 text-white w-full py-2 rounded-lg hover:bg-green-700">Buat Pesanan</button>
    </div>
</main>

@endsection