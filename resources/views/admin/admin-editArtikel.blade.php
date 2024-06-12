@extends('layout.admin-layouts')

@section('content')

<div class="container mx-auto p-9 max-w-6xl bg-white rounded-xl shadow-md mt-8">
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Tambah artikel</h2>
        <p class="text-gray-500">Silakan Mengisi Input dibawah</p>
    </div>
    <form method="post" action="{{ route('artikel-update')}}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="col-span-1">
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
                    <div class="flex flex-col items-center">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>
                        <img id="imagePreview" src="#" alt="Placeholder Image" class="w-40 h-40 object-cover rounded-lg mb-4 hidden">
                        <input type="file" name="article_image" id="article_image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100" required>
                        <p class="mt-2 text-xs text-gray-500">Tambahkan Gambar Artikel. Hanya gambar berformat *.png, *.jpg, dan *.jpeg yang diterima.</p>
                    </div>
                </div>
             
            </div>
            <div class="col-span-2">
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">General</h3>
                    
                        <div class="col-span-1">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Nama Kostum" value="{{$article->title}}"required>
                        </div>
                        <div class="col-span-1">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Deskripsi Kostum" value="{{$article->content}}" required></textarea>
                            {{-- <input type="text" name="deskripsi" id="deskripsi" class="mt-1 block w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Deskripsi Kostum" required> --}}
                        </div>
                   
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="inline-flex items-center px-12 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
    
@endsection