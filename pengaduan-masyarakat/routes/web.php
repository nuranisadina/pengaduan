<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pengaduan/terhapus', [PengaduanController::class, 'terhapus'])->name('pengaduan.terhapus');
Route::get('pengaduan-restore/{id}', [PengaduanController::class, 'restore'])->name('pengaduan.restore');
Route::resource('pengaduan', PengaduanController::class);
Route::get('pengaduan-deleted', [PengaduanController::class, 'deleted'])->name('pengaduan.deleted');
