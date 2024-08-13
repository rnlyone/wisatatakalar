<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['guest']], function(){
    Route::get('login', [UserController::class, 'flogin'])->name('flogin');
    Route::post('login', [UserController::class, 'login'])->name('login');
});

Route::group(['middleware'=> ['auth']], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::resource('destinasi', DestinasiController::class)->except('show');
    Route::resource('berita', BeritaController::class)->except('show');
    Route::resource('user', UserController::class)->except('destroy', 'edit', 'show', 'update', 'store');
    Route::post('user/store', [UserController::class, 'store']);
    Route::post('user/edit', [UserController::class, 'edit']);
    Route::get('user/destroy/{id}', [UserController::class, 'destroy']);
    Route::resource('kategori', KategoriController::class);

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/destinasi/{destinasi}/show', [DestinasiController::class, 'show'])->name('destinasi.show');
Route::get('/berita/{beritum}/show', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/profil', [UserController::class, 'profil'])->name('profil');

Route::get('destinasi/cari', [DestinasiController::class, 'cari'])->name('destinasi.cari');
Route::get('berita/cari', [BeritaController::class, 'cari'])->name('berita.cari');

Route::get('/', [UserController::class, 'welcome'])->name('welcome');
