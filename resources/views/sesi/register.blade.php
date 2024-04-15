@extends('layout/aplikasi')

@section('konten')



<div class="w-50 center border rounded px-3 py-3 mx-auto" style="margin-top:30px;  background-color: plum;"  >
    <h1 class="title" style="text-align: center" >Register</h1>
    <form action="/sesi/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" name="name" id="name" value="{{ Session::get('name') }}" class="form-control">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="{{ Session::get('email') }}" class="form-control">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection

<!-- w-50 center border rounded px-3 py-3 mx-auto -->