<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;

Route::get('/hapus_pengaduan/{id}', [PengaduanController::class,'hapus']);
Route::get ('/detail_pengaduan/{id}', [PengaduanController::class,'detail']);

Route::get ('/update_pengaduan/{id}', [PengaduanController::class,'update']);
Route::post('/update_pengaduan/{id}', [PengaduanController::class,'proses_update']);

Route::post('register_petugas', [PetugasController::class,'table']);
Route::get('register_petugas', [PetugasController::class,'tampil_register']);
Route::post('register', [masyarakatcontroller::class,'proses_registrasi']);

Route::get('/table', [PengaduanController::class,'index']);

Route::get('/table_masyarakat', [MasyarakatController::class,'tablemas']);
Route::post('/table_masyarakat', [MasyarakatController::class,'proses_tambah_pengaduan']);

Route::get('isi_laporan', [PengaduanController::class,'tampil_laporan']);
Route::post('isi_laporan', [PengaduanController::class,'proses_tambah_pengaduan']);

Route::get('home', [pengaduancontroller::class,'home']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});