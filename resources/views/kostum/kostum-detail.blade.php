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
            <a href="#" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Event</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{route('riwayatTransaksi')}}">Riwayat Transaksi</a></li>
                  <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
              </div>
        </li>
                
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto text-center">
            <img class="text-gray-500 rounded-xl" src="{{ asset($costume->image) }}"></img>
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-left right-pane">
            <h1 class="font-weight-bold">{{$costume->nama}}</h1>
            <h3 class="font-weight-bold">Rp {{$costume->harga}}</h3>
        
            <a href="{{ route('booking-page', ['id' => $costume->id]) }}" class="btn btn-primary btn-lg mt-3 mb-2">Booking Sekarang</a>
            <a href="{{ route('guest-previewToko', ['storeId' => $costume->store->id]) }}" class="btn btn-outline-secondary btn-lg mt-3">Kunjungi Toko</a>
            <div class="product-description">
                <h4>Deskripsi Produk</h4>
                <p id="short-description">
                    {!! Str::limit($costume->deskripsi, 100, '...') !!}
                </p>
                <p id="full-description" style="display: none;">
                    {!! nl2br(e($costume->deskripsi)) !!}
                </p>
                <button id="toggle-description" class="btn btn-link">Muat Lebih Banyak</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('toggle-description').addEventListener('click', function () {
        var shortDesc = document.getElementById('short-description');
        var fullDesc = document.getElementById('full-description');
        var toggleButton = document.getElementById('toggle-description');

        if (shortDesc.style.display === 'none') {
            shortDesc.style.display = 'block';
            fullDesc.style.display = 'none';
            toggleButton.textContent = 'Muat Lebih Banyak';
        } else {
            shortDesc.style.display = 'none';
            fullDesc.style.display = 'block';
            toggleButton.textContent = 'Tampilkan Lebih Sedikit';
        }
    });
</script>
    
@endsection