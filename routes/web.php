<?php

use App\Http\Controllers\CostumeController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/sesi', [SessionController::class, 'login']);
Route::post('/sesi/login', [SessionController::class, 'dologin'])->name('session-login');


Route::middleware(['auth','role:user'])->group(function()
{
    Route::get('/dashboard', [KostumController::class, 'index'])->name('user');
});

Route::middleware(['auth','role:toko'])->group(function()
{
    Route::get('/manajemen-kostum', [CostumeController::class, 'index'])->name('toko');
    Route::get('/tambah-kostum', [CostumeController::class, 'tambahCostume'])->name('tambah-kostum');
    Route::post('/tambah-kostum', [CostumeController::class, 'insert']);
});

Route::middleware(['auth','role:admin'])->group(function()
{
    
});

//toko
//ManajemenKostum, Tambah, Update, Delete
// Route::middleware('role:toko')->get('/manajemen-kostum', [CostumeController::class, 'index']);
// Route::group(['middleware' => 'role:2'], function(){
//     Route::get('toko', [CostumeController::class, 'index']);
//     Route::get('/tambah-kostum', [CostumeController::class, 'tambahCostume'])->name('tambah-kostum');
//     Route::post('/tambah-kostum', [CostumeController::class, 'insert']);
// });

//Admin
//ngatur akun, info event