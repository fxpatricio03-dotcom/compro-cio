<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

//route get : melihat, membaca
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('aritmatika', [\App\Http\Controllers\BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::get('aritmatika/kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('aritmatika.kali');
Route::get('aritmatika/bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('aritmatika.bagi');
Route::get('aritmatika/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);

Route::post('tambah-action', [\App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
Route::post('kurang-action', [\App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
Route::post('kali-action', [\App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
Route::post('bagi-action', [\App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');