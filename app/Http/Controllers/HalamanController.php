<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang()
    {
        return view ("halaman/tentang");
    }
    function kontak()
    {
        $judul = ' ini adalah Halaman Kontak';
        $data = [
            'judul' => 'ini adalah halaman kontak',
            'kontak'=> [
                'email' => 'haikal@gmail.com',
                'youtube' => ';;;;;;'
            ]
        ];
        return view ("halaman/kontak")->with($data); 
    }
}
