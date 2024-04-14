@extends('layout/aplikasi')

@section('konten')

<!---->


<div class="breadcomb-area" style="width:100%;  height:100px; margin-top: -28px; background-color: #038175";>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-edit"></i>
                                </div>
                                <div class="breadcomb-ctn" style="margin-top: 10px;">
                                    <h2>COSTUME</h2>
                                    <p>Daftar Costume</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3 d-flex justify-content-end">
                            <div class="breadcomb-report" style="margin-top: 20px;">
                                <a class="btn btn-success " href="{{ route('tambah-kostum')}}" role="button" style="background-color:#17F9E3;">
                                        <i class="notika-icon notika-edit"></i> Tambah Costume
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="data-table-area" style="margin-top: 20px;">
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
                                <tr>
                                    @foreach ($costumes as $index => $costume )
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td><div class="kostum-nama">{{$costume->nama}}</div></td>
                                    <td><img src="{{asset($costume->image) }} " alt="card-1" class="card-img-top" style="width: 200px; height: 200px;"></a></td>
                                    <td><div class="kostum-deskripsi">{{$costume->deskripsi}}</div></td>
                                    <td><div class="kostum-harga">{{$costume->harga}}</div></td>

                                    <td>
                                        <a href="/update-kostum/{{$costume->id}}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination  justify-content-center">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>

@endsection