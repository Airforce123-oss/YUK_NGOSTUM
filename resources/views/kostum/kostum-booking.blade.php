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
                <form action="/rental" method="post">
                    @csrf
                    <label for="costume_name">Costume Name: {{ $costume->nama }}</label>
                    <input type="hidden" name="costume_id" value="{{ $costume->id }}">
                    <div class="text-gray-700 mb-4">Tanggal Booking</div>
                    <label for="start_date">Start Date:</label>
                        <input type="date" name="start_date" id="start_date">
                        <br>
                     <label for="end_date">End Date:</label>
                        <input type="date" name="end_date" id="end_date">
                        <br>
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 no-underline">Sewa Sekarang</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</main>

@endsection