<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PesanController;
use App\Http\Controllers\PortofolioController;

// Halaman utama
Route::get('/', function () {
    return view('home'); // Pastikan ada resources/views/home.blade.php
});

// Halaman about
Route::get('/about', function () {
    return view('about'); // Pastikan ada resources/views/about.blade.php
});

// Halaman projects
Route::get('/projects', function () {
    return view('projects');
});

// Halaman contact
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects', function () {
    return view('projects');
});


// Halaman portofolio
Route::get('/portofolio', [PortofolioController::class, 'index']);

// Halaman pesan
//Route::get('/pesan', [PesanController::class, 'create'])
//Route::post('/pesan', [PesanController::class, 'store']);
//Route::get('/pesan-index', [PesanController::class, 'index']);
