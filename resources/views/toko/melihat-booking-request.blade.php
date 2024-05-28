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

    <div class="w-full h-screen text-center bg-[#edece8] rounded-lg">
        <h2 class="p-4 text-4xl font-bold mb-4 ">Lagi Ada Event Cosplay?, Bingung Sewa Baju?, di Yuk Ngostum Aja Simpel dan Gercep</h2>
        <div class="flex flex-wrap items-center justify-center mb-6 bg-[#D9D9D9] border-black-300">
            <button class="bg-gray-200 p-3 w-40 rounded-lg m-3">Semua Kota</button>
            <button class="bg-gray-200 p-3 w-40 rounded-lg m-3">Kategori</button>
            <button class="bg-gray-200 p-3 w-40 rounded-lg m-3">Lama Sewa</button>
            <div class="flex items-center m-2">
                <input type="number" placeholder="Rp. 0" class="bg-gray-200 p-3 w-40 rounded-lg text-center w-24">
                <span class="mx-2">-</span>
                <input type="number" placeholder="Rp. 500.000" class="bg-gray-200 p-3 w-40 rounded-lg text-center w-24">
            </div>
            <button class="bg-[#038175] text-white p-3 w-40 rounded-lg">Cari</button>
        </div>
        <div class="overflow-x-auto mt-10">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-100">Nama Toko</th>
                        <th class="py-2 px-4 bg-gray-100">Kategori</th>
                        <th class="py-2 px-4 bg-gray-100">Lama Sewa</th>
                        <th class="py-2 px-4 bg-gray-100">Harga</th>
                        <th class="py-2 px-4 bg-gray-100"></th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i <10; $i++)
                    <tr class="border-b">
                        <td class="py-2 px-4">Cahaya Konoha</td>
                        <td class="py-2 px-4">Anime</td>
                        <td class="py-2 px-4">3 Hari</td>
                        <td class="py-2 px-4">Rp. 300.000</td>
                        <td class="py-2 px-4 flex justify-end">
                            <button class="bg-blue-500 text-white py-1 px-4 rounded-lg mr-2">Lihat Costume</button>
                            <button class="bg-green-500 text-white py-1 px-4 rounded-lg">Sewa</button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>




@endsection