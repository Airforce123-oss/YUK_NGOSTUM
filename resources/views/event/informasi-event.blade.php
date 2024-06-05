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

<header class="bg-white shadow">
  </header>
  <main class="container mx-auto px-6 py-12">
    <section class="mb-12">
      <h2 class="text-2xl font-bold text-center mb-6">CHIBICON 2024</h2>
      <div class="flex justify-center mb-6">
        <img src="/images/1713116806.jpg" alt="OTASUKE COLLABORATION | MR & MS COSPLAY 2022" class="rounded-lg shadow-md">
      </div>
    </section>
    <section class="mb-12">
      <div class="flex justify-center mb-6">
        <img src="path/to/image2.png" alt="CLAS:H URBAN FESTIVAL BLOK M" class="rounded-lg shadow-md">
      </div>
      <div class="flex justify-center mb-6">
        <img src="path/to/image3.png" alt="ICCP VIDEO DIVISION" class="rounded-lg shadow-md">
      </div>
    </section>
    <section class="mb-12">
      <h2 class="text-2xl font-bold text-center mb-6">CLAS:H 2021</h2>
      <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
        <img src="path/to/image4.png" alt="UMIGOMI ZERO" class="rounded-lg shadow-md">
        <img src="path/to/image5.png" alt="HENSHIN CHALLENGE" class="rounded-lg shadow-md">
        <img src="path/to/image6.png" alt="ICGP-VD" class="rounded-lg shadow-md">
        <img src="path/to/image7.png" alt="SINGLE COSPLAY" class="rounded-lg shadow-md">
        <img src="path/to/image8.png" alt="MC CHALLENGE" class="rounded-lg shadow-md">
      </div>
    </section>
    <section class="mb-12">
      <h2 class="text-2xl font-bold text-center mb-6">CLAS:H 2020</h2>
      <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
        <img src="path/to/image9.png" alt="Event 1" class="rounded-lg shadow-md">
        <img src="path/to/image10.png" alt="Event 2" class="rounded-lg shadow-md">
        <img src="path/to/image11.png" alt="Event 3" class="rounded-lg shadow-md">
        <img src="path/to/image12.png" alt="Event 4" class="rounded-lg shadow-md">
      </div>
    </section>
  </main>

@endsection