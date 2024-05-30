@extends('layout/aplikasi')

@section('konten')

<nav class="p-5 bg-[#038175] shadow md:flex md:items-center md:justify-between h-20" style="margin-bottom: 50px; ">
    <div class="flex justify-between items-center">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <h1 class="h-10 inline" style="color: white">YUK NGOSTUM</h1>
         </span>
         <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu"></ion-icon> 
         </span>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto text-center">
            <img class="text-gray-500 rounded-xl" src="{{ asset($costume->image) }}"></img>
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-left right-pane">
            <h1 class="font-weight-bold">{{$costume->nama}}</h1>
            <h3 class="font-weight-bold">Rp {{$costume->harga}}</h3>
            
            {{-- <button type="button" class="btn btn-primary btn-lg  mt-3">Booking Sekarang</button> --}}
            <a href="{{ route('booking-page', ['id' => $costume->id]) }}" class="btn btn-primary btn-lg mt-3">Booking Sekarang</a>
            <button class="btn btn-outline-secondary btn-lg mt-3">Tambahkan ke Keranjang</button>
            <div class="product-description">
                <h4>Deskripsi Produk</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum cupiditate officia provident exercitationem. Accusamus aliquid reiciendis eum tenetur, nisi similique, sint id placeat quasi nulla expedita corporis labore nihil? Amet necessitatibus, praesentium temporibus porro quidem est laudantium dignissimos, ducimus labore perspiciatis reprehenderit esse, aperiam sed. Animi quisquam, laboriosam blanditiis vitae dolorum excepturi minus beatae optio, corporis quaerat tempore voluptatum rerum commodi voluptates, sed omnis necessitatibus? Doloribus consectetur sapiente, voluptate dolore, saepe nam nihil quasi odio adipisci illo dicta sit, tempore ea voluptatibus! Neque optio nam voluptatem accusamus dolore animi accusantium laborum magni vitae! Sapiente atque nulla mollitia reprehenderit? Ex corporis pariatur, eum minus quam nemo in eos, eaque quo illum voluptatum impedit reiciendis consequuntur sunt vel nihil dolor magnam cum. Enim doloribus velit eius dolorum officiis! Iste dignissimos amet vero et. Nobis aspernatur incidunt expedita illum voluptatibus vel magnam, nostrum, quod at, itaque nihil. Accusantium quidem quis dolores modi asperiores atque nulla odio sequi dignissimos nemo totam nisi quo illum unde, quas quaerat animi. Doloribus ex asperiores iure adipisci excepturi eaque voluptatum soluta sint. Necessitatibus repellendus minima veritatis porro quae inventore? Modi dolorum velit asperiores deleniti! Quos esse voluptatibus, similique nisi, corporis vero, ipsa asperiores in id rerum fuga aliquam!</p>
            </div>
            {{-- <div class="product-specifications">
                <h4>Spesifikasi Produk</h4>
                <ul>
                    <li>Spesifikasi 1</li>
                    <li>Spesifikasi 2</li>
                    <li>Spesifikasi 3</li>
                    <li>Spesifikasi 4</li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
    
@endsection