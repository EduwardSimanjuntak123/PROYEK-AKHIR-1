<?php

use App\Http\Controllers\about_usController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\data_sarprasController;
use App\Http\Controllers\data_sekolahController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\gurudanstaffController;
use App\Http\Controllers\kata_sambutanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userviewController;
use App\Http\Controllers\KritikController;
use Illuminate\Support\Facades\Route;


Route::get('/', [userviewController::class, 'dashboard'])->name('dashboarduser');
Route::get('/fasilitas', [userviewController::class, 'fasilitas'])->name('fasilitas');
Route::get('/Sejarah', [userviewController::class, 'sejarah'])->name('sejarah');
Route::get('/visi&misi', [userviewController::class, 'visimisi'])->name('visimisi');
Route::get('/Data_Sekolah', [userviewController::class, 'data_sekolah'])->name('data_sekolah');
Route::get('/About_us', [userviewController::class, 'about_us']);
Route::get('/guru_staff', [userviewController::class, 'gurustaff'])->name('guru_staff');
Route::get('/show/{id}', [userviewController::class, 'show_berita'])->name('berita.show');

    
Route::post('/kritik', [userviewController::class, 'storekritik'])->name('kritik.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [loginController::class, 'index'])->name('dashboard');
    });
    
Route::prefix('kritik')->group(function() {
    Route::get('/kritik', [KritikController::class, 'index'])->name('kritik');
    Route::put('/kritik/{kritik}', [KritikController::class, 'update'])->name('kritik.update');
    Route::post('/kritik/{kritik}/reply', [KritikController::class, 'reply'])->name('kritik.reply');
    Route::post('/kritik/{kritik}/hide', [KritikController::class, 'hide'])->name('kritik.hide');
    Route::delete('/kritik/{id}', [KritikController::class, 'destroy'])->name('kritik.destroy');
});
    Route::prefix('gurustaff')->group(function () {
        Route::post('/store', [gurudanstaffController::class, 'store'])->name('gurustaff.store');
        Route::get('/', [gurudanstaffController::class, 'index'])->name('gurustaff.index');
        Route::delete('/delete/{id}', [gurudanstaffController::class, 'delete'])->name('coba');
        Route::put('/update/{id}', [gurudanstaffController::class, 'update'])->name('gurustaff.update');
    });
    Route::prefix('data_sekolah')->group(function () {
        Route::get('/', [data_sekolahController::class, 'index'])->name('data_sekolah.index');
        Route::put('/update/{id}', [data_sekolahController::class, 'update'])->name('data_sekolah.update');
    });
    Route::prefix('galeri')->group(function () {
        Route::get('/', [galeriController::class, 'index'])->name('galeri.index');
        Route::post('/store', [galeriController::class, 'store'])->name('galeri.store');
        Route::delete('/delete/{id}', [galeriController::class, 'delete'])->name('galeri.delete');
    });
    Route::prefix('kata_sambutan')->group(function () {
        Route::get('/', [kata_sambutanController::class, 'index'])->name('kata_sambutan.index');
        Route::put('/update/{id}', [kata_sambutanController::class, 'update'])->name('kata_sambutan.update');
    });
    Route::prefix('data_sarpras')->group(function () {
        Route::get('/', [data_sarprasController::class, 'index'])->name('data_sarpras.index');
        Route::put('/update/{id}', [data_sarprasController::class, 'update'])->name('data_sarpras.update');
        Route::post('/store', [data_sarprasController::class, 'store'])->name('data_sarpras.store');
        Route::delete('/delete/{id}', [data_sarprasController::class, 'delete'])->name('data_sarpras.delete');
    });
    Route::prefix('about_us')->group(function () {
        Route::get('/', [about_usController::class, 'index'])->name('about_us.index');
        Route::put('/update/{id}', [about_usController::class, 'update'])->name('about_us.update');
    });
    Route::prefix('berita')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
        Route::post('/store', [BeritaController::class, 'store'])->name('berita.store');
        Route::put('/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::delete('/delete/{id}', [BeritaController::class, 'delete'])->name('berita.delete'); 
    });
});

require __DIR__.'/auth.php';