<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->group(function () {
    Route::resource('/', DashboardController::class, ['names' => 'dashboard.index']);
    Route::resource('kategori', KategoriController::class, ['names' => 'dashboard.kategori']);
    Route::resource('buku', BukuController::class, ['names' => 'dashboard.buku']);
});

