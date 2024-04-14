<?php

use App\Http\Controllers\CostumeController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Session\Session;

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

//Auth::routes();

//Route::get('/',[HalamanController::class, 'index']);
Route::get('/kontak',[HalamanController::class, 'kontak']);
Route::get('/tentang',[HalamanController::class, 'tentang']);

Route::get('user', [KostumController::class, 'index']);
Route::get('user/{id}', [KostumController::class, 'detail'])->where('id', '[0-9]+');

Route::get('/sesi', [SessionController::class, 'index']);

Route::post('/sesi/login', [SessionController::class, 'login']);
Route::post('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

//toko
Route::get('/manajemen-kostum', [CostumeController::class, 'index']);

Route::get('/tambah-kostum', [CostumeController::class, 'tambahCostume']);