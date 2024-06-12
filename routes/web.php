<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Models\Costume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
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

Route::get('/admin-dashboard', [AdminController::class, 'AdminController']);


Route::middleware(['auth', 'role:user'])->group(function () {
    //dashboard
    Route::get('/dashboard', [CostumeController::class, 'tampilanDashboard'])->name('user');
    //halaman booking - detail kostum
    Route::get('/booking-kostum/{id}', [BookingController::class, 'bookingPage'])->name('booking-page');
    Route::get('/detail-kostum/{id}', [CostumeController::class, 'detailCostume'])->name('detail.costume');
    Route::post('/rental', [BookingController::class, 'store'])->name('store-rental');
    //checkout
    Route::get('/checkout-kostum/{rental}', [BookingController::class, 'show'])->name('bayar.costume');
    //Pembayaran
    Route::get('/pembayaran-kostum/{id}', [BookingController::class, 'pembayaranKostum'])->name('pembayaran-kostum');
    //preview toko - guest
    Route::get('/guest-preview/{storeId}', [TokoController::class, 'guestPreviewToko'])->name('guest-previewToko');
    //Event
    Route::get('/informasi-event', [ArticleController::class, 'index']);


    Route::get('');

    Route::get('/riwayat-transaksi', [CostumeController::class, 'riwayatTransaksi'])->name('riwayatTransaksi');
    
    //Route::get('/booking-tiket-event', [ArticleController::class, 'bookingEvent']);
    //Route::get('/mengelola-informasi-event', [ArticleController::class, 'mengelolaEvent']);

    //pindahkan ke admin
    //Route::get('/melihat-booking-request', [BookingController::class, 'showBookingRequest'])->name('booking-request');

    Route::get('/rincian-transaksi/{id}', [BookingController::class, 'rincianTransaksi'])->name('rincian-transaksi');
    Route::post('/pay/{id}', [BookingController::class, 'buktiPembayaran'])->name('pembayaran');
    Route::post('/hapus-rental', [BookingController::class, 'destroy'])->name('rental.destroy');

    
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
    Route::get('/admin/artikel/add', [ArticleController::class, 'create'])->name('artikel-add');
    Route::get('/admin/artikel', [ArticleController::class, 'manajemen'])->name('artikel-manajemen');
    Route::post('/admin/artikel/add', [ArticleController::class, 'store'])->name('tambah-artikel');
    Route::get('/admin/artikel/update/{id}', [ArticleController::class, 'edit'])->name('artikel-edit');
    // Route::post('/admin/artikel/update/{id}', [ArticleController::class, 'update'])->name('artikel-update');
    Route::get('/admin/artikel/hapus/{id}', [ArticleController::class, 'destroy'])->name('artikel-hapus');
});

