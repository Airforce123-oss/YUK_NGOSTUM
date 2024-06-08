@extends('layout.aplikasi')

@section('konten')
<div class="container mx-auto p-9 max-w-6xl bg-white rounded-xl shadow-md mt-8">
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Tambah Kostum</h2>
        <p class="text-gray-500">Silakan Mengisi Input dibawah</p>
    </div>
    <form method="post" action="{{ route('tambah-kostum')}}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="col-span-1">
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
                    <div class="flex flex-col items-center">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>
                        <img id="imagePreview" src="#" alt="Placeholder Image" class="w-40 h-40 object-cover rounded-lg mb-4 hidden">
                        <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100" required>
                        <p class="mt-2 text-xs text-gray-500">Tambahkan Gambar Produk Kostum. Hanya gambar berformat *.png, *.jpg, dan *.jpeg yang diterima.</p>
                    </div>
                </div>
             
            </div>
            <div class="col-span-2">
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">General</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kostum</label>
                            <input type="text" name="nama" id="nama" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Nama Kostum" required>
                        </div>
                        <div class="col-span-1">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Deskripsi Kostum" required>
                        </div>
                        <div class="mt-6">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option>Published</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Harga</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga Dasar</label>
                            <input type="text" name="harga" id="harga" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Harga" required>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="inline-flex items-center px-12 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(file);
            imagePreview.classList.remove('hidden');
        }
    });
</script>



@endsection