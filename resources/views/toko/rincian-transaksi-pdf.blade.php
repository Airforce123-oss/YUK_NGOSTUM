@extends('layout/aplikasi')

@section('konten')
<div class="max-w-full mx-auto bg-white p-8 rounded-lg shadow-md ">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-xl font-bold">New Invoice: xxxxxx</h1>
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
                <p class="font-bold">Invoice Number</p>
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
                            <th class="text-left">Harga</th>
                            <th class="text-left">Durasi Sewa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $rental->costume->nama }}</td>
                            <td>{{$rental->costume->harga}}</td>
                            <td>3 Hari</td>
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
            <div class="space-y-4">
                <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg">Kirim Invoice</button>
                <button class="w-full bg-gray-200 text-gray-700 py-2 px-4 rounded-lg">Download</button>
            </div>
        </div>
    </div>

    <div class="flex justify-end space-x-4 mt-8">
        <div>
            <p class="font-bold">Subtotal</p>
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