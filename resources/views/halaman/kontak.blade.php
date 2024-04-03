@extends('layout/aplikasi')

@section('konten')

<h1>  {{ $judul }} </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam molestias maiores odit, facilis corrupti vitae voluptatem quis nesciunt repellat, a libero aut alias quae ad dolorem, aspernatur earum amet minima.</p>
<p>
    <ul>
        <li>Email: {{$kontak['email']}}</li>
        <li>Youtube: {{$kontak['youtube']}}</li>
    </ul>
</p>

@endsection