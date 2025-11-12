<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('sign-out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('sign-out');

Route::prefix('admin')->group(function(){
    Route::resource('dashboard', App\Http\Controllers\ADMIN\DashboardController::class);
});
//di dalam resource sudah ada get, post, put, delete

//route get : melihat, membaca
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('aritmatika', [\App\Http\Controllers\BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::get('aritmatika/kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('aritmatika.kali');
Route::get('aritmatika/bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('aritmatika.bagi');
Route::get('aritmatika/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);

//ada button pake post kalo post harus pake $request
Route::post('tambah-action', [\App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
Route::post('kurang-action', [\App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
Route::post('kali-action', [\App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
Route::post('bagi-action', [\App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');
