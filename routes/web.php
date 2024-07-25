<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MahasiswaController::class, 'dashboard'])->name('mahasiswa');
Route::get('/add', [MahasiswaController::class, 'add_student'])->name('mahasiswa.add');
Route::post('/add', [MahasiswaController::class, 'save_student'])->name('mahasiswa.save');
Route::get('/update/{id}', [MahasiswaController::class, 'edit_student'])->name('mahasiswa.edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update_student'])->name('mahasiswa.update');
Route::delete('/delete/{id}', [MahasiswaController::class, 'delete_student'])->name('mahasiswa.delete');