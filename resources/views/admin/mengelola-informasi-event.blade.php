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
            <a href="informasi-event" class="text-xl hover:text-white duration-500"style="color: white !important; text-decoration: none; font-size:20px;">Event</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Profil</a></li>
                  <li><a class="dropdown-item" href="{{route('riwayatTransaksi')}}">Riwayat Transaksi</a></li>
                  <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
              </div>
        </li>
            
          
</nav>


<div class="data-table-area bg-[white]" style="margin-top: 10px; border: 2px solid #17F9E3;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead> 
                                <tr>
                                    <th>No.</th>
                                    <th width="30%">Nama Event</th>
                                    <th width="30%">Gambar</th>
                                    <th width="30%">Deskripsi</th>
                                    <th width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><div class="kostum-nama"></div></td>
                                    <td><img src="" alt="card-1" class="card-img-top" style="width: 200px; height: 200px;"></a></td>
                                    <td><div class="kostum-deskripsi"></div></td>
                                    <td>
                                        <a href="{{ route('tambah-event')}}" role="button">
                                            <button class="btn btn-primary mr-2">Tambah</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href=""" role="button">
                                            <button class="btn btn-primary mr-2">Update</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                         <div>
                            Total Item:
                   
                        </div> 
                         <div class="d-flex justify-content-center" aria-label="Page navigation"> 
                         
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection