<?php

use App\Http\Controllers\Admin\PetugasController as AdminPetugasController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Auth\MasyarakatController;
use App\Http\Controllers\Auth\PetugasController;
use App\Http\Controllers\Masyarakat\PengaduanController;
use App\Http\Controllers\Views\DashboardController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [DashboardController::class, 'landing']);

Route::get('/login', [MasyarakatController::class, 'auth'])->name('login');
Route::post('/login/authenticate', [MasyarakatController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [MasyarakatController::class, 'register'])->name('register');
Route::post('/store/register', [MasyarakatController::class, 'storeMasyarakat'])->name('store.register');
Route::get('/logout', [MasyarakatController::class, 'logoutMasyarakat'])->name('logout');
Route::get('report/export-pdf', [PengaduanController::class, 'exportPDF'])->name('report.export-pdf');

// Masyarakat

Route::middleware(['auth'])->group(function () {
    Route::prefix('masyarakat')->name('masyarakat')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardMasyarakat'])->name('/dashboard');
        Route::get('/pengaduan', [PengaduanController::class, 'pengaduan'])->name('/pengaduan');
        Route::post('/pengaduans', [PengaduanController::class, 'storePengaduan'])->name('/store.pengaduan');
        Route::get('/detail/{id}', [PengaduanController::class, 'detail'])->name('/detail');
    });
});

// Route Webmin
Route::prefix('webmin')->name('admin')->group(function () {
    Route::get('login', [PetugasController::class, 'login'])->name('.login');
    Route::post('authenticate', [PetugasController::class, 'authenticate'])->name('.authenticate');
});
Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('webmin')->name('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardPetugas'])->name('.dashboard');
        Route::get('/logout', [PetugasController::class, 'logout'])->name('.logout');
        // Tanggapan
        Route::post('/detail/create-tanggapan/{id}', [TanggapanController::class, 'createTanggapan'])->name('.create-tanggapan');
        Route::get('/detail/pengaduan/{id}', [TanggapanController::class, 'index'])->name('.detail');
        // Pengaduan
        Route::get('/pending', [DashboardController::class, 'pending'])->name('.pending');
        Route::get('/selesai', [DashboardController::class, 'selesai'])->name('.selesai');
        // Data Masyarakat
        Route::get('/masyarakat/data', [DashboardController::class, 'masyarakat'])->name('.data.m');
        // Petugas
        Route::get('/petugas', [AdminPetugasController::class, 'addPetugas'])->name('.petugas');
        Route::post('/create-petugas', [AdminPetugasController::class, 'store'])->name('.store');
    });
});
