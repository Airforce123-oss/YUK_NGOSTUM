@extends('layout.admin-layouts')

@section('content')

    <body class="font-[Poppins] h-screen" style="background-image: url(/images/background.png); margin-top: -30px;">
        <header class="bg-[#038175]">
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <div class="h-[56px]" style="margin-top: 30px; ">
                    {{-- @if (Auth::check())    
                <h1 class="w-90 cursor-pointer text-[#FFFFFF]">{{Auth::user()->name}}</h1>
                @endif --}}
                </div>
                {{-- <div class="flex items-center gap-6">
                <a class="bg-[#543310] text-white px-5 py-2 rounded-full hover:bg-[#87acec] no-underline" href="{{ route('tambah-kostum')}}" role="button" style="background-color:#17F9E3; color:black;">
                    <i class="notika-icon notika-edit"></i> Tambah Costume
            </a>
            </div> --}}
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
                                            <th class="w-auto">Penyewa</th>
                                            <th class="w-auto">Costume</th>
                                            <th class="w-auto">Gambar</th>
                                            <th class="w-auto">Tanggal Awal</th>
                                            <th class="w-auto">Tanggal Akhir</th>
                                            <th class="w-auto">Total Harga</th>
                                            <th class="w-auto">Status</th>
                                            <th class="w-auto">Bukti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rentals as $rental)
                                            <tr>
                                                <td>
                                                    <div class="nama-penyewa">{{ $rental->user->name }}</div>
                                                </td>
                                                <td>
                                                    <div class="nama-kostum">{{ $rental->costume->nama }}</div>
                                                </td>
                                                <td><img src="{{ asset($rental->costume->image) }} " alt="card-1"
                                                        class="card-img-top" style="width: 200px; height: 200px;"></a></td>
                                                <td>
                                                    <div class="kostum-deskripsi">{{ $rental->start_date }}</div>
                                                </td>
                                                <td>
                                                    <div class="kostum-deskripsi">{{ $rental->end_date }}</div>
                                                </td>
                                                <td>
                                                    <div class="kostum-harga">{{ $rental->subtotal }}</div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $rental->id }}">
                                                        <span>{{ $rental->status }}</span>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $rental->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        Ubah Status Pesanan
                                                                    </h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ route('admin.update') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $rental->id }}">
                                                                        <select class="form-select mb-3" name="status"
                                                                            aria-label="Default select example">
                                                                            <option selected>Pilih Status</option>
                                                                            <option value="lunas">Lunas</option>
                                                                            <option value="dp">Dp 50%</option>
                                                                            <option value="batal">Batal</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#buktiPembayaran{{ $rental->id }}">
                                                        Bukti
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="buktiPembayaran{{ $rental->id }}"
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
                                                                <img src="{{$rental->bukti_image}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

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
    @endsection
