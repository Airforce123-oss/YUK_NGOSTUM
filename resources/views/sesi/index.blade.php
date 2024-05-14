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
  
                  <form action="/sesi/login" method="POST">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">YUK NGOSTUM</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in ke Akunmu</h5>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Email</label> 
                      <input type="email" name="email" id="email" value="{{ Session::get('email') }}" class="form-control">
                       @error('email')
                      <div class="text-danger">{{ $message }}</div>
                       @enderror
                      
                    </div>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>  
                      <input type="password" name="password" id="password" class="form-control">
                      @error('password')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
  
                    <div class="pt-1 mb-4" >
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" name="submit" type="submit" type="button">Login</button>
                    </div>
  
                
                    <div>
                        <p class="mb-4">Belum punya Akun? <a href="{{'user-register'}}">Register</a></p>
                        <p style="margin-top: -15px;">Do you want to join with us? <a href="{{'toko-register'}}">Click Here</a> </p>
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

