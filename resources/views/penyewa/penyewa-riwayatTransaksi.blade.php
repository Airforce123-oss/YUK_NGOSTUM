<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Hugo 0.122.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>YUK NGOSTUM</title> 

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href=".public/css/app.css">
    {{-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand&display=swap');
        body, {
        padding-bottom: 20px;
  
}

#check:checked ~ ul {
    left: 0;
}

.navbar {
  margin-bottom: 20px;
}


.images {
    display: flex;
    width: 100%;
    transition: 2s;
}

.images img {
    width: 100%;
}

.navigation a {
 display: inline-block;
 height: 25px;
 width: 25px;
 background-color: black;
 font-size: 0px; 
border-radius: 50px;
margin: 20px;
transition: 1s;

}

.navigation a:hover {
    background-color: beige;
}

.navigation {
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    text-align: center;
    margin-top: -90px;
}

.wrapper {
    width: 800px;
    margin: auto;
    border-radius: 5px;
    overflow: hidden;
    position: relative;
}

#slide-1:target ~ .images {
    margin-left: 0px;
}

#slide-2:target ~ .images {
    margin-left: -100%;
}

#slide-3:target ~ .images {
    margin-left: -200%;
}

@media screen and (max-width: 800px) {
    .wrapper {
        width: 90%;

    }
}

.gallery {
   display: flex;
   justify-content: space-around;
   margin-top: 60px;
}
.gallery-item {
   text-align: center;
}
.gallery-item h2 {
   margin-bottom: 10px;
}
.gallery-item img {
   width: 200px;
   height: 200px;   
   margin-bottom: 10px;
   border-radius: 10px;
}

</style>
<body style=" background-image: url('/images/background.png')">
<main>

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
            {{-- <li class="mx-4 my-6 md:my-0">
                <a href="informasi-event" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Event</a>
            </li> --}}
            <li class="mx-4 my-6 md:my-0">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{route('riwayatTransaksi')}}">Riwayat Booking</a></li>
                      <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                  </div>
            </li>
                
              
    </nav>

    <div class="data-table-area bg-[white] mx-5" style="margin-top: 20px;  border: 2px solid #17F9E3;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead> 
                                    <tr>
                                        <th class="w-auto">Costume</th>
                                        <th class="w-auto">Toko</th>
                                        <th class="w-auto">Tanggal Awal</th>
                                        <th class="w-auto">Tanggal Akhir</th>
                                        <th class="w-auto">Total Harga</th>
                                        <th class="w-auto">Status</th>
                                        <th class="w-auto">Bukti</th>
                                        <th class="w-auto">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rental as $rentals)
                                        
                                    <tr>
                                        {{-- <td><div class="nama-penyewa">{{$rental->user->name}}</div></td> --}}
                                        <td><div class="nama-kostum">{{$rentals->costume->nama}}</div></td>
                                        <td><div class="nama-kostum">{{$rentals->costume->store->nama_toko}}</div></td>
                                        {{-- <td><img src="{{asset($rental->costume->image) }} " alt="card-1" class="card-img-top" style="width: 200px; height: 200px;"></a></td> --}}
                                        <td><div class="kostum-deskripsi">{{$rentals->start_date}}</div></td>
                                        <td><div class="kostum-deskripsi">{{$rentals->end_date}}</div></td>
                                        <td><div class="kostum-harga">{{$rentals->subtotal}}</div></td>
                                        <td><span class="badge bg-secondary">{{$rentals->status}}</span></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#buktiPembayaran{{ $rentals->id }}">
                                                Bukti
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="buktiPembayaran{{ $rentals->id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Bukti Pembayaran
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <img src="{{$rentals->bukti_image}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="{{route ('rincian-transaksi', ['id'=>$rentals->id])}}" class="btn btn-primary">Invoice</a></td>
                                    
                                        {{-- <td>
                                            <a href="/update-kostum/{{$costume->id}}" role="button">
                                                <button class="btn btn-primary mr-2">Update</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/delete-kostum/{{$costume->id}}">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                
                                </tbody>
                            </table>
                             {{-- <div>
                                Total Item:
                                {{ $costumes->total()  }}
                            </div> 
                             <div class="d-flex justify-content-center" aria-label="Page navigation"> 
                                 {{ $costumes->links() }}
                             </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
    </body>
</html>

<script setup>
    import { onMounted } from "vue";
    import { initFlowbite } from "flowbite";
    
    onMounted(() => {
        initFlowbite();
    });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
