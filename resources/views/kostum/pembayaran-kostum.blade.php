@extends('layout/aplikasi')

@section('konten')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                <a href="#" class="text-xl hover:text-white duration-500"
                    style="color: white !important; text-decoration: none; font-size:20px;">Cari Costume Apa?</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#"
                    class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Notifikasi</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#"
                    class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Lainnya</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </li>


    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 px-4">
        <div class="bg-white rounded shadow p-6 w-full">
            <h2 class="text-2xl font-bold mb-6">Konfirmasi Pembayaran</h2>

            <div class="mb-4 flex justify-between">
                <div>
                    <p><span class="font-bold">Nama Pemesan: </span>{{ $rental->user->name }}</p>
                    <p><span class="font-bold">Alamat Pemesan: </span>{{ $rental->alamat_pengiriman }}</p>
                </div>
                <div>
                    <p><span class="font-bold">Nama Penjual:</span> Hartono</p>
                </div>
            </div>

            <div class="mb-4">
                <p><span class="font-bold">ID Transaksi:</span> 12********XY</p>
                <p><span class="font-bold">Metode Pembayaran: </span>E-Wallet</p>
            </div>

            <div class="mb-6">
                <h3 class="font-bold mb-2">Rincian Pesanan</h3>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2">No.</th>
                            <th class="py-2">Nama Kostum</th>
                            <th class="py-2">Harga Produk</th>
                            <th class="py-2">Kuantitas</th>
                            <th class="py-2">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">{{ $rental->costume->nama }}</td>
                            <td class="border px-4 py-2">{{ $rental->costume->harga }}</td>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-6">
                <h3 class="font-bold mb-2">Rincian Pembayaran</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p>Subtotal untuk Produk: Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                        <p>Total Ongkos Kirim: Rp {{ number_format($shipping_cost, 0, ',', '.') }}</p>
                        <p>Biaya Layanan: Rp {{ number_format($service_fee, 0, ',', '.') }}</p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold">Total Pembayaran: Rp {{ number_format($total_payment, 0, ',', '.') }}</p>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('pembayaran', ['id' => $rental->id]) }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st" style="margin-bottom: 20px;">
                                        <input type="file" class="form-control" placeholder="bukti_image"
                                            name="bukti_image" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="flex justify-between items-center">

                <button type="submit" class="btn btn-primary">Bayar</button>
                </form>

                <div class="countdown-container">
                    <p class="text-red-600 font-bold mr-2">Batas Pembayaran:</p>
                    <p class="font-bold" id="countdown">15:00</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        window.onload = function() {
            let timeLeft = 900; // 15 menit dalam detik
            const countdownElement = document.getElementById('countdown');
            const id = {{ $rental->id }}; // Mengambil rentalId dari server-side
            const interval = setInterval(() => {
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    countdownElement.textContent =
                        `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                    timeLeft--;

                    if (timeLeft < 0) {
                        clearInterval(interval);
                        countdownElement.textContent = 'Waktu Habis';
                        $.post('/hapus-rental', {
                                id: id
                            }, function(data, status) {
                                alert("Data: " + data + "\nStatus: " + status);
                                // Mengarahkan ke halaman dashboard setelah penghapusan
                                window.location.href = '/dashboard';
                            })
                            .fail(function(xhr, status, error) {
                                console.error("Error: " + error);
                            });
                    }
                },
                1000);
        };
    </script>
@endsection
