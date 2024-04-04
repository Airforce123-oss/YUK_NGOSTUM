<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    
    function index(){
        return view('sesi/index');
    }
    function login(Request $request) {
        Session::flash('email', $request->email);
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request-> email,
            'password' => $request -> password
        ];

        if(Auth::attempt($infologin)){
            //jika otentikasi sukses
            return redirect('user')->with('Sukses', 'Login Berhasil');
        } else {
            // jika otentikasi gagal
           return redirect('sesi') -> withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }
    function logout() {
        Auth::logout();
        return redirect('sesi')-> with('Sukses', 'Berhasil Logout');
    }

    function register() {
        return view('sesi/register');
    }

    function create(Request $request)
    {   
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique::users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password ialah adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request-> email,
            'password' => $request -> password
        ];

        if(Auth::attempt($infologin)){
            //jika otentikasi sukses
            return redirect('user')->with('Sukses', 'Login Berhasil');
        } else {
            // jika otentikasi gagal
           return redirect('sesi') -> withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }
}
