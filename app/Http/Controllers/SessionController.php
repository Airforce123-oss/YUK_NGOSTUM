<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{

    use AuthenticatesUsers;

    public function login() {
        return view('sesi.index');
    }

    function dologin(Request $request) {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus setidaknya 6 karakter'
        ]);
    
        // Attempt to authenticate the user
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            // Authentication successful, regenerate session
            $request->session()->regenerate();
    
            // Redirect based on user role
            if (auth()->user()->role === 'admin') 
            {
                return redirect()->route('admin');
            } 
            elseif (auth()->user()->role === 'toko') 
            {
                return redirect()->route('toko');
            } 
            else 
            {
                return redirect()->route('user');
            }
        }
    
        // Authentication failed, redirect back with an error message
        return redirect()->route('sesi')->withErrors(['login' => 'Email atau password tidak valid']);
    }
    
    function logout() {
        Auth::logout();
        return redirect('sesi')-> with('Sukses', 'Berhasil Logout');
    }

    function userRegister() {
        return view('sesi/register');
    }

    function tokoRegister() {
        return view('sesi/toko_register');
    }

    function create(Request $request)
    {   
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
            'role.unique' => 'Role wajib dipilih',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password ialah adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request-> email,
            'password' => $request -> password
        ];

        if (Auth::attempt($infologin)) {
            // Authentication successful, regenerate session
            $request->session()->regenerate();
    
            // Redirect based on user role
            if (auth()->user()->role === 'admin') 
            {
                return redirect()->route('admin');
            } 
            elseif (auth()->user()->role === 'toko') 
            {
                return redirect()->route('toko');
            } 
            else 
            {
                return redirect()->route('user');
            }
        }
    
        // Authentication failed, redirect back with an error message
        return redirect()->route('sesi')->withErrors(['login' => 'Email atau password tidak valid']);
    }
}
