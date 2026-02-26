<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PendaftaranlspController;
use App\Http\Controllers\PendaftaranSertifikatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;

/// jangan di hapus
Route::get('/', action: function() {
    return view('welcome');
});

// ======================================================================
// ✅ ADMIN ROUTES
// ======================================================================
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {

    // USERS
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    
    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // ADMIN - LIST PENDAFTARAN LSP
    Route::get('/pendaftaranlsp/list', [PendaftaranlspController::class, 'index'])
        ->name('pendaftaranlsp.index');
    Route::get('/pendaftaranlsp/export', [PendaftaranlspController::class, 'export'])
        ->name('pendaftaranlsp.export');
    Route::get('/pendaftaranlsp/{id}/edit', [PendaftaranlspController::class, 'edit'])
        ->name('pendaftaranlsp.edit');
    Route::put('/pendaftaranlsp/{id}', [PendaftaranlspController::class, 'update'])
        ->name('pendaftaranlsp.update');
       Route::delete('/pendaftaranlsp/{id}', [PendaftaranlspController::class, 'destroy'])
        ->name('pendaftaranlsp.destroy');

    // ======================================================================
    // 🔥 ADMIN - PENDAFTARAN SERTIFIKAT (PAKAI CONTROLLER YANG BENAR)
    // ======================================================================

    // FORM create pendaftaran sertifikat
    Route::get('/pendaftaransertifikat', [PendaftaranSertifikatController::class, 'create'])
        ->name('pendaftaransertifikat.create');

    // LIST data pendaftar sertifikat
    Route::get('/listdaftarsertifikat', [PendaftaranSertifikatController::class, 'index'])
        ->name('pendaftaransertifikat.index');

    // SIMPAN FORM
    Route::post('/pendaftaransertifikat', [PendaftaranSertifikatController::class, 'store'])
        ->name('pendaftaransertifikat.store');

    // HAPUS DATA
    Route::delete('/pendaftaransertifikat/{id}', [PendaftaranSertifikatController::class, 'destroy'])
    ->name('pendaftaransertifikat.destroy');
});

// =======================
// ROUTE UNTUK HALAMAN USER
// =======================
// Pastikan method di controller bernama `beritaSertifikat()` — ini menyesuaikan controller yang kamu berikan.
Route::get('/sertifikat/berita', [PendaftaranSertifikatController::class, 'beritaSertifikat'])
    ->name('sertifikat.berita');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ======================================================================
// 🔹 ROUTE USER UMUM
// ======================================================================
Route::get('/welcome', fn() => view('welcome'))->name('beranda');

Route::prefix('profil')->group(function () {
    Route::get('/tentang', fn() => view('profil.tentang'))->name('profil.tentang');
    Route::get('/visi', fn() => view('profil.visi'))->name('profil.visi');
    Route::get('/dasarhukum', fn() => view('profil.dasarhukum'))->name('profil.dasarhukum');
    Route::get('/ruanglingkup', fn() => view('profil.ruanglingkup'))->name('profil.ruanglingkup');
});

Route::prefix('sertifikasi')->group(function () {
    Route::get('/pemegangsertifikat', fn() => view('sertifikasi.pemegangsertifikat'))->name('sertifikasi.pemegangsertifikat');
    Route::get('/asesor', fn() => view('sertifikasi.asesor'))->name('sertifikasi.asesor');
    Route::get('/jadwaluji', fn() => view('sertifikasi.jadwaluji'))->name('sertifikasi.jadwaluji');
    Route::get('/tempatuji', fn() => view('sertifikasi.tempatuji'))->name('sertifikasi.tempatuji');
});

Route::get('/galeri', fn() => view('galeri'))->name('galeri');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');
Route::get('/pendaftaran', fn() => view('pendaftaran'))
    ->middleware('auth')
    ->name('pendaftaran');

Route::prefix('sertifikat')->group(function () {
    Route::get('/commispastry', fn() => view('sertifikat.commispastry'))->name('sertifikat.commispastry');
    Route::get('/receptionist', fn() => view('sertifikat.receptionist'))->name('sertifikat.receptionist');
    Route::get('/roomattendant', fn() => view('sertifikat.roomattendant'))->name('sertifikat.roomattendant');
    Route::get('/waiter', fn() => view('sertifikat.waiter'))->name('sertifikat.waiter');
});

// ======================================================================
// 🔹 ROUTE USER - PENDAFTARAN LSP
// ======================================================================
Route::get('/suksesinput', fn() => view('suksesinput'))->name('pendaftaranlsp.success');

Route::get('/pendaftaranlsp', [PendaftaranlspController::class, 'create'])
    ->name('pendaftaranlsp.create');
Route::post('/pendaftaranlsp', [PendaftaranlspController::class, 'store'])
    ->name('pendaftaranlsp.store');

require __DIR__ . '/auth.php';
