@extends('layout.aplikasi')

@section('content')
<div class="breadcomb-area" style="margin-top: 20px;">
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
                                <div class="breadcomb-ctn">
                                    <h2>Tambah Costume</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-example-area">
    <div class="container">
        <form method="post" action="{{ route('tambah-kostum')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="form-example-int">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st" style="margin-bottom: 20px;">
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st" style="margin-bottom: 20px;">
                                            <input type="file" class="form-control" placeholder="Gambar" name="image" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st" style="margin-bottom: 20px;">
                                            <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int" >
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st" style="margin-bottom: 20px;">
                                            <input type="text" class="form-control" placeholder="Harga" name="harga" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" style="background-color: #038175;" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
