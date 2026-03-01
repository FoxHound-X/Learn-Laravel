<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

Route::get('/', [TestingController::class, 'index']);

Route::get('/tambah', [TestingController::class, 'tambah_tampil'])->name('tambah.tambah_tampil');
Route::post('/tambah', [TestingController::class, 'tambah_data']);
Route::delete('/tambah/{$id}', [TestingController::class, 'delete_data'])->name('tambah.delete_data');

