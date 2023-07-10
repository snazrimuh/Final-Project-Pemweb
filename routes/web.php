<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

use App\Http\Controllers\AnakController;

Route::get('/anak', [AnakController::class, 'index'])->name('anak.index');
Route::get('/anak/create', [AnakController::class, 'create'])->name('anak.create');
Route::post('/anak', [AnakController::class, 'store'])->name('anak.store');
Route::get('/anak/{nik_anak}/edit', [AnakController::class, 'edit'])->name('anak.edit');
Route::put('/anak/{nik_anak}', [AnakController::class, 'update'])->name('anak.update');
Route::delete('/anak/{nik_anak}', [AnakController::class, 'destroy'])->name('anak.destroy');
Route::get('/anak/{nik_anak}/pemeriksaan', [AnakController::class, 'pemeriksaanIndex'])->name('anak.pemeriksaan.index');


use App\Http\Controllers\IbuController;

Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
Route::get('/ibu/create', [IbuController::class, 'create'])->name('ibu.create');
Route::post('/ibu', [IbuController::class, 'store'])->name('ibu.store');
Route::get('/ibu/{ibu}/edit', [IbuController::class, 'edit'])->name('ibu.edit');
Route::put('/ibu/{ibu}', [IbuController::class, 'update'])->name('ibu.update');
Route::delete('/ibu/{ibu}', [IbuController::class, 'destroy'])->name('ibu.destroy');


use App\Http\Controllers\PemeriksaanAnakController;

Route::prefix('anak')->group(function () {
    Route::get('/{nik_anak}/pemeriksaan/create', [PemeriksaanAnakController::class, 'create'])
        ->name('anak.pemeriksaan.create');
    Route::post('/{nik_anak}/pemeriksaan', [PemeriksaanAnakController::class, 'store'])
        ->name('anak.pemeriksaan.store');
    Route::get('/{nik_anak}/pemeriksaan', [PemeriksaanAnakController::class, 'index'])
        ->name('anak.pemeriksaan.index');
});

use App\Http\Controllers\RiwayatKehamilanController;

Route::get('/riwayat-kehamilan', [RiwayatKehamilanController::class, 'index'])->name('riwayat-kehamilan.index');
Route::get('/riwayat-kehamilan/create', [RiwayatKehamilanController::class, 'create'])->name('riwayat-kehamilan.create');
Route::post('/riwayat-kehamilan', [RiwayatKehamilanController::class, 'store'])->name('riwayat-kehamilan.store');


use App\Http\Controllers\PemeriksaanKehamilanController;

Route::get('riwayat-kehamilan/create', [RiwayatKehamilanController::class, 'create'])->name('riwayat-kehamilan.create');
Route::post('riwayat-kehamilan', [RiwayatKehamilanController::class, 'store'])->name('riwayat-kehamilan.store');
Route::get('riwayat-kehamilan/{id}/pemeriksaan/create', [PemeriksaanKehamilanController::class, 'create'])->name('riwayat-kehamilan.pemeriksaan.create');
Route::post('riwayat-kehamilan/{id}/pemeriksaan', [PemeriksaanKehamilanController::class, 'store'])->name('riwayat-kehamilan.pemeriksaan.store');
Route::get('riwayat-kehamilan/{id}/pemeriksaan', [PemeriksaanKehamilanController::class, 'index'])->name('riwayat-kehamilan.pemeriksaan.index');

use App\Http\Controllers\WilayahKelurahanController;

Route::get('/anak/create', [WilayahKelurahanController::class, 'create'])->name('anak.create');
Route::get('/ibu/create',  [WilayahKelurahanController::class, 'create_ibu'])->name('ibu.create');
Route::get('/admin_wilayah/create',  [WilayahKelurahanController::class, 'create_admin_wilayah'])->name('admin_wilayah.create');
Route::get('/register', [WilayahKelurahanController::class, 'register'])->name('register');

use App\Http\Controllers\AdminWilayahController;

Route::get('/admin_wilayah', [AdminWilayahController::class, 'index'])->name('admin_wilayah.index');
Route::get('/admin_wilayah/create', [AdminWilayahController::class, 'create'])->name('admin_wilayah.create');
Route::post('/admin_wilayah', [AdminWilayahController::class, 'store'])->name('admin_wilayah.store');
Route::get('/admin_wilayah/{adminWilayah}/edit', [AdminWilayahController::class, 'edit'])->name('admin_wilayah.edit');
Route::put('/admin_wilayah/{adminWilayah}', [AdminWilayahController::class, 'update'])->name('admin_wilayah.update');
Route::delete('/admin_wilayah/{adminWilayah}', [AdminWilayahController::class, 'destroy'])->name('admin_wilayah.destroy');

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'storeUser']);
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboarduser', [AuthController::class, 'dashboard'])->name('user.dashboard');
});

use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});



