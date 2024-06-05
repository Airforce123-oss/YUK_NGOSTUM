<?php
use App\Models\Costume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\updateCostumeController;

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
    return redirect('landing-page');
});
Auth::routes();

Route::get('/landing-page', [landingPageController::class, 'landingPage'])->name('user');
Route::get('/sesi', [SessionController::class, 'login']);
Route::post('/sesi/login', [SessionController::class, 'dologin'])->name('session-login');

//User
Route::get('/user-register', [SessionController::class, 'userRegister']);
Route::post('/sesi/register', [SessionController::class, 'create'])->name('session-register');

//Toko
Route::get('/toko-register', [SessionController::class, 'tokoregister']);
Route::post('/sesi/register', [SessionController::class, 'create'])->name('session-register');


Route::middleware(['auth'])->group(function () {
    //logout all
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    //dashboard
    Route::get('/dashboard', [CostumeController::class, 'tampilanDashboard'])->name('user');
    //halaman booking - detail kostum
    Route::get('/booking-kostum/{id}', [BookingController::class, 'bookingPage'])->name('booking-page');
    Route::get('/detail-kostum/{id}', [CostumeController::class, 'detailCostume'])->name('detail.costume');
    Route::post('/rental', [BookingController::class, 'store'])->name('store-rental');
    //checkout
    Route::get('/bayar-kostum/{rental}', [BookingController::class, 'show'])->name('bayar.costume');
    //preview toko - guest
    Route::get('/guest-preview/{storeId}', [TokoController::class, 'guestPreviewToko'])->name('guest-previewToko');
    //Event
    Route::get('/informasi-event', [EventController::class, 'event']);
    Route::get('/booking-tiket-event', [EventController::class, 'bookingEvent']);

});

Route::middleware(['auth', 'role:toko'])->group(function () {
    //Manajemen Kostum
    Route::get('/manajemen-kostum', [CostumeController::class, 'index'])->name('toko');
    Route::get('/tambah-kostum', [CostumeController::class, 'tambahCostume'])->name('tambah-kostum');
    Route::post('/tambah-kostum', [CostumeController::class, 'insert']);
    Route::post('/update-kostum', [CostumeController::class, 'update'])->name('update-kostum');
    Route::get('/update-kostum/{id}', [CostumeController::class, 'updateCostume']);
    Route::get('/delete-kostum/{id}', [CostumeController::class, 'hapusCostume']);
    //preview toko - Toko
    Route::get('toko-preview', [TokoController::class, 'previewToko'])->name('preview-toko');
    //Booking Request - Toko
    Route::get('/melihat-booking-request', [BookingController::class, 'showBookingRequest'])->name('booking-request');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    //Booking request - admin
    Route::get('/admin-request', [AdminController::class, 'adminShowBookingRequest'])->name('admin');
    Route::post('/admin-request', [AdminController::class, 'update'])->name('admin.update');
    //Event article
    Route::get('/mengelola-informasi-event', [EventController::class, 'mengelolaEvent']);
});


