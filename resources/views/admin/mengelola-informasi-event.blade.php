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

<div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full" style="background-image: url('circle-doodle-bg-768x547.png'); background-size: cover;">
    <h2 class="text-2xl font-bold text-teal-700 mb-6">Kelola Event</h2>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="namaIvent">Nama Event</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="namaIvent" type="text" placeholder="Masukkan Nama Event">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="posterIvent">Poster Event</label>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Masukkan Gambar
        </button>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="waktuPelaksanaan">Waktu Pelaksanaan</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="waktuPelaksanaan" type="text" placeholder="Masukkan Waktu Pelaksanaan">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsiIvent">Deskripsi Event</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="deskripsiIvent" type="text" placeholder="Masukkan Deskripsi Event">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>


@endsection