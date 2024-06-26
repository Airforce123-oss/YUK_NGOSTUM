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
        
</nav>


    <h2 class="text-center text-2xl font-bold mb-6">{{$store->nama_toko}}</h2>
    <div class="w-full h-full container mx-auto mt-8">
        <div class="container p-5 border-2 border-black bg-[#edece8] rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($costumes as $costume)
                    <div class="col-md-8 flex m-auto">
                        <a href="{{ route('detail.costume', ['id' => $costume->id]) }}" class="no-underline text-black">
                            <div class="card-mb-4 mt-4 p-9 rounded-lg border-4 border-gray-500 bg-[#adc7b1]" style="padding: 20px">
                                <img src="{{ asset($costume->image) }}" alt="card-1" class="card-img-top mx-auto rounded-lg" style="width: 200px; height: 200px;">
                                <div class="kostum-nama text-center pt-2 font-bold text-uppercase">{{$costume->nama}}</div>
                                <div class="kostum-harga text-center ">Rp{{$costume->harga}}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection