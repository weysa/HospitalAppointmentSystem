<?php

use App\Models\Obat;
use App\Models\JadwalPeriksa;
use App\Models\JanjiPeriksa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JadwalPeriksaController;
use App\Http\Controllers\JanjiPeriksaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['role:dokter'])->prefix('dokter')->group(function () {
        Route::get('/', function () {
            return view('dokter.dashboard');
        })->name('dokter.dashboard');

        Route::prefix('obat')->group(function () {
            Route::get('/', [ObatController::class, 'index'])->name('dokter.obat.index');
            Route::get('/create', [ObatController::class, 'create'])->name('dokter.obat.create');
            Route::post('/store', [ObatController::class, 'store'])->name('dokter.obat.store');

            Route::get('/edit/{id}', [ObatController::class, 'edit'])->name('dokter.obat.edit');
            Route::put('/update/{id}', [ObatController::class, 'update'])->name('dokter.obat.update');

            Route::delete('destroy/{id}', [ObatController::class, 'destroy'])->name('dokter.obat.destroy');


        });

        Route::prefix('jadwal-periksa')->group(function () {
            Route::get('/', [JadwalPeriksaController::class, 'index'])->name('dokter.jadwal-periksa.index');

            Route::get('/create', [JadwalPeriksaController::class, 'create'])->name('dokter.jadwal-periksa.create');
            Route::post('/store', [JadwalPeriksaController::class, 'store'])->name('dokter.jadwal-periksa.store');
            Route::patch('/update/{id}', [JadwalPeriksaController::class, 'update'])->name('dokter.jadwal-periksa.update');            
            // Route::get('/edit/{id}', [JadwalPeriksaController::class, 'edit'])->name('dokter.jadwal-periksa.edit');

        });
    });

    Route::middleware(['role:pasien'])->prefix('pasien')->group(function () {
        Route::get('/', function () {
            return view('pasien.dashboard');
        })->name('pasien.dashboard');

        Route::prefix('janji-periksa')->group(function () {
            Route::get('/', [JanjiPeriksaController::class, 'index'])->name('pasien.janji-periksa.index');

            Route::get('/create', [JanjiPeriksaController::class, 'create'])->name('pasien.janji-periksa.create');

        });

    });

});

require __DIR__.'/auth.php';
