@extends('layout/aplikasi')

@section('konten')

<!-- start -->

<body class="font-[Poppins] h-screen" style="background-image: url(/images/background.png); margin-top: -30px;">
    <header class="bg-[#038175]">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div class="h-[56px]" style="margin-top: 30px; ">
                <h1 class="w-90 cursor-pointer text-[#FFFFFF]">Tambahkan Kostum</h1>
            </div>
            <div class="flex items-center gap-6">
                <a class="bg-[#543310] text-white px-5 py-2 rounded-full hover:bg-[#87acec] no-underline" href="{{ route('tambah-kostum')}}" role="button" style="background-color:#17F9E3; color:black;">
                    <i class="notika-icon notika-edit"></i> Tambah Costume
            </a>
            </div>
    </header>

<!-- end -->

<div class="data-table-area bg-[white]" style="margin-top: 20px; border: 2px solid #17F9E3;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead> 
                                <tr>
                                    <th>No.</th>
                                    <th width="30%">Nama</th>
                                    <th width="30%">Gambar</th>
                                    <th width="30%">Deskripsi</th>
                                    <th width="30%">Harga</th>
                                    <th width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($costumes as $key => $costume )
                                <tr>
                                    <td>{{$costumes->firstItem() + $key}}</td>
                                    <td><div class="kostum-nama">{{$costume->nama}}</div></td>
                                    <td><img src="{{asset($costume->image) }} " alt="card-1" class="card-img-top" style="width: 200px; height: 200px;"></a></td>
                                    <td><div class="kostum-deskripsi">{{$costume->deskripsi}}</div></td>
                                    <td><div class="kostum-harga">{{$costume->harga}}</div></td>

                                    <td>
                                        <a href="/update-kostum/{{$costume->id}}" role="button">
                                            <button class="btn btn-primary mr-2">Update</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/delete-kostum/{{$costume->id}}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         <div>
                            Total Item:
                            {{ $costumes->total()  }}
                        </div> 
                         <div class="d-flex justify-content-center" aria-label="Page navigation"> 
                             {{ $costumes->links() }}
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection