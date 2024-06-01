@extends('layout/aplikasi')

@section('konten')

<section class="vh-100" style="background-image: url('/images/background.png')">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-12 col-lg-10 d-none d-md-block" style="margin: auto; padding-top: 20px;">
                <img src="/images/nippon.png"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                    <form action="/sesi/register" method="POST">
                      @csrf
                      <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">YUK NGOSTUM</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Daftarkan Akun kamu</h5>

                      <input type="hidden" name="role" id="role" value="1"> <!-- Assuming '2' is the role ID for 'toko' -->

                      <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="name">Nama</label> 
                          <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                          @error('name')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="nama_toko">Nama Toko</label> 
                          <input type="text" name="nama_toko" id="nama_toko" value="{{ old('nama_toko') }}" class="form-control">
                          @error('nama_toko')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="alamat_toko">Alamat Toko</label> 
                          <input type="text" name="alamat_toko" id="alamat_toko" value="{{ old('alamat_toko') }}" class="form-control">
                          @error('alamat_toko')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="email">Email</label> 
                          <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                          @error('email')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="password">Password</label>  
                          <input type="password" name="password" id="password" class="form-control">
                          @error('password')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="pt-1 mb-4">
                          <button name="submit" type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
                      </div>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection



<!-- w-50 center border rounded px-3 py-3 mx-auto -->