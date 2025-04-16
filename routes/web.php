<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index'])->name('home');

// http://sib.test/about/nama-kalian
Route::get('/about-us/{namaDepan}/{namaBlkg}', [AboutController::class, 'index'])->name('about');

Route::get('/book', [BookController::class, 'index'])->name('book');

// http://sib.test/artikel?page=2&limit=10
Route::get('/artikel', function (Request $request) {
    $page = $request->query('page');
    $limit = $request->query('limit');
    return 'artikel page: ' . $page . ' - limit: ' . $limit;
});

Route::get('/biodata/{nama}', function (Request $request, string $nama) {
    echo 'Biodata<br>';
    echo 'Nama: ' . str_replace('-', ' ', strtoupper($nama)) . '<br>';
    $nim = $request->query('nim');

    return 'Nim: ' . $nim;
});
