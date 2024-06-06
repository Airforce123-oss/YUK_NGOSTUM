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

<div class="container mx-auto mt-8 px-4 flex w-screen">
    <!-- Sidebar -->
    <div class="w-3/2 bg-white p-4 rounded shadow">
        <div class="mb-4">
            <input type="text" placeholder="Pencarian..." class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <h3 class="font-bold text-2xl">Filter berdasarkan Tanggal</h3>
            <input type="date" class="w-full px-4 py-2 border rounded mt-2">
            <input type="date" class="w-full px-4 py-2 border rounded mt-2">
        </div>
        <div class="mb-4">
            <input type="text" placeholder="Masukkan Lokasi" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <h3 class="font-bold text-2xl ">Kategori</h3>
            <select class="w-full px-4 py-2 border rounded mt-2">
                <option>Semua</option>
            </select>
        </div>
        <div class="mb-4">
            <h3 class="font-bold text-2xl ">Events</h3>
            <div>
                <label class="flex items-center mt-2">
                    <input type="radio" name="events" class="form-radio">
                    <span class="ml-2">Online Events</span>
                </label>
                <label class="flex items-center mt-2">
                    <input type="radio" name="events" class="form-radio">
                    <span class="ml-2">Offline Events</span>
                </label>
            </div>
        </div>
        <div>
            <h3 class="font-bold text-2xl">Filter Harga</h3>
            <input type="range" min="0" max="100" class="w-full mt-2">
            <button class="bg-green-600 text-white w-full py-2 rounded mt-2">Filter Harga</button>
        </div>
    </div>
     <!-- Main Content -->
     <div class="w-3/4 ml-4">
        <div class="grid grid-cols-2 gap-4">
            <!-- Event Card 1 -->
            <div class="bg-white rounded shadow p-4">
                <img src="/gambar-kostum/deliwafa.webp" alt="a" class="w-full h-42 object-cover rounded">
                <h3 class="font-bold mt-4">Deliwafa Fest Vol.4</h3>
                <p class="text-gray-600 mt-2"><i class="far fa-calendar-alt"></i> 13 Jul 2024</p>
                <p class="text-gray-600"><i class="fas fa-map-marker-alt"></i> Surabaya</p>
                <p class="text-red-600 font-bold mt-2">Rp.65.000</p>
            </div>
            <!-- Event Card 2 -->
            <div class="bg-white rounded shadow p-4">
                <img src="/gambar-kostum/rock.webp" alt="Deliwafa Fest Vol.4" class="w-full h-42 object-cover rounded">
                <h3 class="font-bold mt-4">ROCKAMINATION Festival Madiun</h3>
                <p class="text-gray-600 mt-2"><i class="far fa-calendar-alt"></i> 13 Jul 2024</p>
                <p class="text-gray-600"><i class="fas fa-map-marker-alt"></i> Madiun</p>
                <p class="text-red-600 font-bold mt-2">Rp.85.000</p>
            </div>
        </div>
    </div>
</div>



@endsection