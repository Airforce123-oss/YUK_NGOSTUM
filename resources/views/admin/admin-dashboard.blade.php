@extends('layout.admin-layouts')

@section('content')

 <!-- Main Content -->
 <div class="flex-1 pl-2" style="margin-left: -120px;">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <input type="text" placeholder="Cari...." class="p-2 pl-10 border border-gray-300 rounded">
            <button class="p-2 pl-7 text-center bg-blue-600 text-white rounded">Filters</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-2">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-500">Total Pendapatan</p>
            <p class="text-green-500">+3.4% dibandingkan bulan lalu</p>
            <h2 class="text-xl font-bold">Rp xxxxxx</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-500">Total Pengguna</p>
            <p class="text-green-500">+3.4%  dibandingkan bulan lalu</p>
            <h2 class="text-xl font-bold">Rp xxxxxx</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-500">Total Pemesanan</p>
            <p class="text-red-500">-4%  dibandingkan bulan lalu</p>
            <h2 class="text-xl font-bold">Rp xxxxxx</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-500">Pengguna Yang Aktif</p>
            <p class="text-green-500">+3.4%  dibandingkan bulan lalu</p>
            <h2 class="text-xl font-bold">Rp xxxxxx</h2>
        </div>
    </div>

    <!-- Grafik-->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-6 mb-90 rounded-lg shadow-md">
            <h3 class="text-lg font-bold mb-4">Total Pembayaran</h3>
            <canvas id="incomeChart"></canvas>
        </div>
        <div class="bg-white p-6 mb-90 rounded-lg shadow-md">
            <h3 class="text-lg font-bold mb-4">Status Pembayaran</h3>
            <canvas id="paymentChart"></canvas>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-bold mb-4">Pesanan Terkini</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4">Nama Produk</th>
                        <th class="py-2 px-4">Harga</th>
                        <th class="py-2 px-4">Tanggal Pemesanan</th>
                        <th class="py-2 px-4">Status</th>
                        <th class="py-2 px-4">Metode Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">xxxxxxx</td>
                        <td class="py-2 px-4">xxxxx</td>
                        <td class="py-2 px-4">xxxxx</td>
                        <td class="py-2 px-4">xxxx</td>
                        <td class="py-2 px-4">E-Wallet</td>
                    </tr>
                    <!-- Repeat for other orders -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>
    const incomeCtx = document.getElementById('incomeChart').getContext('2d');
    const incomeChart = new Chart(incomeCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Perkembangan User',
                data: [3000, 4000, 3500, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000],
                borderColor: 'red',
                fill: false,
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Pendapatan'
                    }
                }
            }
        }
    });

    const paymentCtx = document.getElementById('paymentChart').getContext('2d');
    const paymentChart = new Chart(paymentCtx, {
        type: 'pie',
        data: {
            labels: ['Selesai', 'Ditunda', 'Dibatalkan'],
            datasets: [{
                data: [52, 28, 20],
                backgroundColor: ['#4CAF50', '#FFC107', '#F44336']
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-[#038175] text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">ADMIN</h1>
            </div>
            <nav class="mt-5">
                <ul>
                    <li><a href="#" class="block py-2.5 px-4 rounded hover:bg-teal-700">Dashboard</a></li>
                    <li><a href="#" class="block py-2.5 px-4 rounded hover:bg-teal-700">Orders</a></li>
                    <li><a href="#" class="block py-2.5 px-4 rounded hover:bg-teal-700">Users</a></li>
                    <li><a href="#" class="block py-2.5 px-4 rounded hover:bg-teal-700">Customers</a></li>
                    <li><a href="#" class="block py-2.5 px-4 rounded hover:bg-teal-700">Merchants</a></li>
                </ul>
            </nav>
        </div>

       

           
</body>

</html>
