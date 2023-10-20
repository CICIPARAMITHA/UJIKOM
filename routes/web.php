<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;

Route::prefix('/')->group(function () {
    Route::controller(LandingController::class)->group(function () {
        Route::get('/', 'home');
       
    });
});

Route::prefix('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginAksi');
        Route::get('/logout/{admin}', 'logout');
    });
});

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::controller(PaketController::class)->group(function () {
        Route::get('/paket', 'index');
        Route::get('/paket/tambah', 'tambah');
        Route::post('/paket/tambah', 'tambahAksi');
        Route::get('/paket/edit/{paket}', 'edit');
        Route::post('/paket/edit/{paket}', 'editAksi');
        Route::get('/paket/hapus/{paket}', 'hapus');
    });
    Route::controller(ArtikelController::class)->group(function () {
        Route::get('/artikel', 'index');
        Route::get('/artikel/tambah', 'tambah');
        Route::post('/artikel/tambah', 'tambahAksi');
        Route::get('/artikel/edit/{artikel}', 'edit');
        Route::post('/artikel/edit/{artikel}', 'editAksi');
        Route::get('/artikel/hapus/{artikel}', 'hapus');
    });
    Route::controller(EventController::class)->group(function () {
        Route::get('/event', 'index');
        Route::get('/event/tambah', 'tambah');
        Route::post('/event/tambah', 'tambahAksi');
        Route::get('/event/edit/{event}', 'edit');
        Route::post('/event/edit/{event}', 'editAksi');
        Route::get('/event/hapus/{event}', 'hapus');
    });
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/galeri', 'index');
        Route::get('/galeri/tambah', 'tambah');
        Route::post('/galeri/tambah', 'tambahAksi');
        Route::get('/galeri/edit/{galeri}', 'edit');
        Route::post('/galeri/edit/{galeri}', 'editAksi');
        Route::get('/galeri/hapus/{galeri}', 'hapus');
    });
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index');
        Route::post('/profile/{admin}', 'edit');
        
    });

});

