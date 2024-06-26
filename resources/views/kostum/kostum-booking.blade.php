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
                  <li><a class="dropdown-item" href="{{route('riwayatTransaksi')}}">Riwayat Booking</a></li>
                  <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
              </div>
        </li>
            
          
</nav>
<main class="container mx-auto p-4 rounded border-2 border-black bg-[#edece8]">
    <div class="rounded-lg shadow-lg p-6 mb-20 bg-white">
        <h2 class="text-5xl font-bold mb-4 text-center">BOOKING</h2>
        <div class="flex">
            <div class="w-1/2 bg-gray-200 flex items-center justify-center rounded-lg">
                <img class="text-gray-500 rounded-xl" src="{{ asset($costume->image) }}"></img>
            </div>
            <div class="w-1/2 pl-4 " style="margin-left: 40px;">
                <h3 class="text-[30px] font-semibold mb-2">{{$costume->nama}}</h3>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500">4.5</span>
                    <span class="text-gray-500 ml-2">13.5RB Penilaian</span>
                    <span class="text-gray-500 ml-2">15RB Sewa</span>
                </div>
                <div class="text-red-500 text-2xl font-bold mb-2">Rp {{$costume->harga}} / 3 Hari</div>
                <form action="/rental" method="POST" class="bg-white p-6 rounded shadow-md">
                    @csrf
                    <div class="mb-4">
                        <label for="costume_name" class="block text-gray-700 font-bold mb-2">Costume Name: {{ $costume->nama }}</label>
                        <input type="hidden" name="costume_id" value="{{ $costume->id }}">
                    </div>
                
                    <div class="mb-4">
                        <label for="start_date" class="block text-gray-700 font-bold mb-2">Start Date:</label>
                        <input type="date" name="start_date" id="start_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                
                    <div class="mb-4">
                        <label for="end_date" class="block text-gray-700 font-bold mb-2">End Date:</label>
                        <input type="date" name="end_date" id="end_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                
                    <div class="mb-4">
                        <label for="alamat_pengiriman" class="block text-gray-700 font-bold mb-2">Alamat Pengiriman:</label>
                        <input type="text" name="alamat_pengiriman" id="alamat_pengiriman" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    </div>
                
                    <div class="mb-4">
                        <p class="text-gray-700 font-bold mb-2">Pilih Metode Pembayaran</p>
                        <select name="metode_pembayaran" id="metode_pembayaran" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2">
                            <option value="e_wallet">E-Wallet</option>
                        </select>
                    </div>
                
                    <div class="mb-4">
                        <p class="text-gray-700 font-bold mb-2">Pilih Metode Pengiriman</p>
                        <select name="metode_pengambilan" id="metode_pengambilan" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2">
                            <option value="diantar">Diantar</option>
                            <option value="diambil">Diambil</option>
                        </select>
                    </div>
                
                    <div class="text-center">
                        <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">Sewa Sekarang aja</button>
                    </div>
                </form>
                
            </div>
            </div>
        </div>
    </div>
</main>

@endsection