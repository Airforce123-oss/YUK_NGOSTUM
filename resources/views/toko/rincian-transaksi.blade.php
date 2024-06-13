@extends('layout/aplikasi')

@section('konten')


<nav class="p-5 bg-[#038175] shadow md:flex md:items-center md:justify-between h-20" style="margin-bottom: 90px; ">
    <div class="flex justify-between items-center">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <a href="{{route('user')}}">
                <h1 class="h-10 inline" style="color: white">YUK NGOSTUM</h1>
            </a>
         </span>
         <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu"></ion-icon> 
         </span>
    </div>

    <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute w-full left-0 md:w-auto">
        {{-- <li class="mx-4 my-6 md:my-0">
            <a href="informasi-event" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Event</a>
        </li> --}}
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
<div class="max-w-full mx-auto bg-white px-8 rounded-lg shadow-md ">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-xl font-bold">Nomor Transaksi: {{$rental->id}}</h1>
        </div>
    </div>

    <div class="flex space-x-8 mb-8">
        <div class="w-2/3">
            <div class="mb-4">
                <div class="bg-gray-900 text-white p-4 rounded-lg">
                    <h2 class="text-lg font-bold">Nama Penyewa:</h2>
                    <h2 class="text-lg font-bold">{{$rental->user->name}}</h2>
                </div>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg mb-4">
                {{-- <p class="font-bold">Invoice Number</p> --}}
                <p>Metode Pembayaran : {{ $rental->metode_pembayaran }}</p>
                <p>Metode Pengambilan :  {{ $rental->metode_pengambilan }}</p>
               
                <!-- 
                <p class="font-bold">Issued Date: xxxx</p>
                <p class="font-bold">Due Date: xxxx</p>
                -->
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <p class="font-bold">Item Details</p>
                <table class="w-full mt-4">
                    <thead>
                        <tr>
                            <th class="text-left">Nama Kostum</th>
                            {{-- <th class="text-left">Harga</th> --}}
                            {{-- <th class="text-left">Durasi Sewa</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $rental->costume->nama }}</td>
                            {{-- <td>{{$rental->costume->harga}}</td> --}}
                            {{-- <td>3 Hari</td> --}}
                        </tr>
                    </tbody>
                </table>
               <!--  <button class="text-blue-500 mt-4">Add Item</button> -->
            </div>
        </div>
        <div class="w-1/3 space-y-4">
            <div class="bg-gray-100 p-4 rounded-lg">
                <p class="font-bold">Detail Penyewa</p>
                <div class="mt-4">
                    <p class="font-medium">{{$rental->user->name}}</p>
                    <p>{{$rental->user->email}}</p>
                    <p>{{$rental->user->nama_toko}}</p>
                    <p>{{ $rental->alamat_pengiriman }}</p>
                </div>
             <!--   <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg">Add Customer</button> -->
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <p class="font-bold">Basic Info</p>
                <div class="mt-4 space-y-2">
                    <div>
                        <p class="block text-sm">Mulai Sewa: {{$rental->start_date}}</p>
                        <p class="block text-sm">Sewa Berakhir: {{$rental->end_date}}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <hr>
    <div class="flex justify-start space-x-4 ml-6 mt-8">
        <div>
            <p class="font-bold">Harga</p>
            <p class="text-center">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
        </div>
        <div>
            <p class="font-bold">Total Ongkos Kirim</p>
            <p class="text-center">Rp {{ number_format($shipping_cost, 0, ',', '.') }}</p>
        </div>
        <div>
            <p class="font-bold">Biaya Layanan</p>
            <p class="text-center">Rp {{ number_format($service_fee, 0, ',', '.') }}</p>
        </div>
        <div>
            <p class="font-bold">Total Pembayaran</p>
            <p class="text-center">Rp {{ number_format($total_payment, 0, ',', '.') }}</p>
        </div>
    </div>
</div>
@endsection