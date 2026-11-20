<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Web;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\EmployeController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController; 

// Route Utama & Dashboard (Olshop)
// Route::get('/', [DashboardController::class, 'home']);
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);

// Route untuk menampilkan daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk membuka Controller web fungsi biodata
Route::get('/biodata', [Web::class, 'biodata']);

// Route ke controller kalkulator 
Route::get('/kalkulator', [KalkulatorController::class, 'home']);

// Route untuk proses perhitungan kalkulator
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// Route untuk menampilkan form kalkulator segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

// Route untuk memproses hasil perhitungan segitiga
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitungSegitiga']);

//route ke controller Dashboard 
Route::get('/dashboard', [DashboardController::class, 'adminDashboard']);

//route ke controller Dashboard untuk menampilkan halaman gallery
Route::get('/gallery', [DashboardController::class, 'gallery']);

//route ke controller Dashboard untuk menampilkan halaman contact
Route::get('/employe',[EmployeController::class, 'index']);

Route::get('/employe/create',[EmployeController::class, 'create']); 
Route::post('/employe/store',[EmployeController::class, 'store']);

Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']); 
Route::put('/employe/{employe}',[EmployeController::class, 'update']);

Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']); 

Route::resource('employe',EmployeController::class);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/{id}/edit', [AdminController::class, 'edit']);
Route::post('/admin/{id}/update', [AdminController::class, 'update']);
Route::post('/admin/{id}/delete', [AdminController::class, 'destroy']);

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[AuthController::class, 'cek']);

// Route::get('/dashboard', function () {
//     return view('dashboard'); // atau arahkan ke DashboardController kamu
// });

Route::get('/dashboard', [DashboardController::class, 'adminDashboard']);