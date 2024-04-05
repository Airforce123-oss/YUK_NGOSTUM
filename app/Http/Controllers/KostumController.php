<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KostumController extends Controller
{
   function index()
   {
    $data = User::all();
    return view('sesi/dashboard')->with('data', $data ); 
   }
   function detail($id)
   {
    return "<h1>Saya penyewa dari controller dengan Id $id </h1>";
   }
}
