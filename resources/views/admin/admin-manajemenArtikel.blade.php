@extends('layout.admin-layouts')

@section('content')
    <div class="flex items-center gap-6">
        <a class="bg-[#543310] text-white px-5 py-2 rounded-full hover:bg-[#87acec] no-underline"
            href="{{ route('tambah-artikel') }}" role="button" style="background-color:#17F9E3; color:black;">
            <i class="notika-icon notika-edit"></i> Tambah Artikel
        </a>
    </div>

    <div class="data-table-area bg-[white]" style="margin-top: 20px; border: 2px solid #17F9E3;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>

                                        <th width="30%">Title</th>
                                        <th width="30%">Gambar</th>
                                        <th width="30%">Action</th>
                                        {{-- <th width="30%">Content</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            {{-- <td>{{$costumes->firstItem() + $key}}</td> --}}
                                            <td>
                                                <div class="kostum-nama">{{ $article->title }}</div>
                                            </td>
                                            <td><img src="{{ asset($article->article_image) }} " alt="card-1"
                                                    class="card-img-top" style="width: 200px; height: 200px;"></a></td>
                                            {{-- <td><div class="kostum-deskripsi">{{$article->content}}</div></td> --}}

                                            <td>
                                                <a href="/admin/artikel/update/{{ $article->id }}" role="button">
                                                    <button class="btn btn-primary mr-2">Update</button>
                                                </a>
                                                <a href="/admin/artikel/hapus/{{ $article->id }}">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- <div class="d-flex justify-content-center" aria-label="Page navigation"> 
                             {{ $article->links() }}
                         </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
