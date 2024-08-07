<?php
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\CreatePasienController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\DataPerawatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ScheduleDokterController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\KecamatanController;

use GuzzleHttp\Middleware;
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

// ROUTE LOGIN
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


Route::get('/get-cities-by-province/{provinceId}', [ProvinceController::class, 'getCitiesByProvince']);
Route::get('/get-kecamatan-by-city/{cityId}', [CityController::class, 'getKecamatanByCity']);
Route::get('/get-kelurahan-by-kecamatan/{kecamatanId}', [KecamatanController::class, 'getKelurahanByKecamatan']);

Route::get('/dashboard',[RawatJalanController::class,'store'])->name('rawat-jalan');

// ROUTE MASTER PASIEN
Route::get('/dashboard/pendaftaran',[RawatJalanController::class,'store'])->name('rawat-jalan');
Route::get('/dashboard/pendaftaran/create-pasien',[CreatePasienController::class,'createPasien'])->name('create-pasien');
Route::post('/dashboard/pendaftaran/create-pasien',[CreatePasienController::class,'createData'])->name('create-pasien');
Route::get('/dashboard/pendaftaran/edit/{id}',[CreatePasienController::class,'edit'])->name('edit-pasien');
Route::put('/dashboard/pendaftaran/{id}',[CreatePasienController::class,'update'])->name('update-pasien');
Route::delete('/dashboard/pendaftaran/{id}',[CreatePasienController::class,'destroy'])->name('destroy-pasien');

// ROUTE MASTER PERAWAT
Route::get('/dashboard/perawat/create-perawat',[PerawatController::class,'store'])->name('create-perawat');
Route::post('/dashboard/perawat/create-perawat',[PerawatController::class,'create'])->name('create-perawat');
Route::get('/dashboard/perawat/data-perawat',[DataPerawatController::class,'store'])->name('data-perawat');
Route::get('/dashboard/perawat/edit/{id}',[DataPerawatController::class,'edit'])->name('edit-perawat');
Route::put('/dashboard/perawat/{id}',[DataPerawatController::class,'update'])->name('update-perawat');
Route::delete('/dashboard/perawat/{id}',[DataPerawatController::class,'destroy'])->name('destroy-perawat');

// ROUTE MASTER TENAGA MEDIS
Route::get('/tenaga-medis/create-tenaga-medis',[DokterController::class,'store'])->name('store-dokter');
Route::get('/tenaga-medis/data-tenaga-medis',[DokterController::class,'storeData'])->name('data-dokter');
Route::post('/tenaga-medis/create-tenaga-medis',[DokterController::class,'create'])->name('create-dokter');
Route::get('/tenaga-medis/edit-tenaga-medis/{id}',[DokterController::class,'edit'])->name('edit-dokter');
Route::put('/tenaga-medis/{id}',[DokterController::class,'update'])->name('update-dokter');
Route::delete('/tenaga-medis/{id}',[DokterController::class,'destroy'])->name('delete-dokter');

Route::get('/tenaga-medis/jadwal-dokter',[ScheduleDokterController::class,'store'])->name('penjadwalan-dokter');
Route::get('/tenaga-medis/create-jadwal-dokter',[ScheduleDokterController::class,'storeForm'])->name('create-jadwal-dokter');
Route::post('/tenaga-medis/create-jadwal-dokter',[ScheduleDokterController::class,'create'])->name('create-jadwal-dokter');
Route::get('/tenaga-medis/edit-jadwal-dokter/{id}',[ScheduleDokterController::class,'edit'])->name('edit-jadwal-dokter');
Route::put('/tenaga-medis/update-jadwal-dokter/{id}',[ScheduleDokterController::class,'update'])->name('update-jadwal-dokter');
Route::delete('/tenaga-medis/delete-jadwal-dokter/{id}',[ScheduleDokterController::class,'destroy'])->name('delete-jadwal-dokter');

Route::get('/get-jadwal/{dokter_id}/{layanan_id}', [ScheduleDokterController::class, 'getJadwal']);


// ROUTE MASTER LAYANAN
Route::get('/layanan/create-layanan',[LayananController::class,'store'])->name('create-layanan');
Route::post('/layanan/create-layanan',[LayananController::class,'create'])->name('create-layanan');
Route::get('/layanan/data-layanan',[LayananController::class,'storeData'])->name('data-layanan');
Route::get('/layanan/edit-layanan/{id}',[LayananController::class,'edit'])->name('edit-layanan');
Route::put('/layanan/update-layanan/{id}',[LayananController::class,'update'])->name('update-layanan');
Route::delete('/layanan/delete-layanan/{id}',[LayananController::class,'destroy'])->name('delete-layanan');

// ROUTE MASTER KAMAR
Route::get('/kamar/create-kamar',[KamarController::class,'storeForm'])->name('create-kamar');
Route::post('/kamar/create-kamar',[KamarController::class,'create'])->name('create-kamar');
Route::get('/kamar/data-kamar',[KamarController::class,'storeData'])->name('data-kamar');
Route::get('/kamar/edit-kamar/{id}',[KamarController::class,'edit'])->name('edit-kamar');
Route::put('/kamar/update-kamar/{id}',[KamarController::class,'update'])->name('update-kamar');
Route::delete('/kamar/{id}',[KamarController::class,'destroy'])->name('delete-kamar');

// ROUTE MASTER BED
Route::get('/bed/create-bed',[BedController::class,'storeForm'])->name('create-kamar');
Route::post('/bed/create-bed',[BedController::class,'create'])->name('create-bed');
Route::get('/bed/data-bed',[BedController::class,'storeData'])->name('data-bed');
Route::get('/bed/edit-bed/{id}',[BedController::class,'edit'])->name('edit-bed');
Route::put('/bed/update-bed/{id}',[BedController::class,'update'])->name('update-bed');
Route::delete('/bed/{id}',[BedController::class,'destroy'])->name('delete-bed');