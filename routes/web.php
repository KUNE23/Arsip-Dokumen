<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'showlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin']);
Route::get('/postlogout', [LoginController::class, 'postlogout']);
Route::middleware(['auth'])->group(function () {

Route::get('/', [DashboardController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);  
Route::get('/user/{id}/show', [UserController::class, 'show']);  
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'destroy']);

Route::get('/jenis', [JenisController::class, 'index']);
Route::get('/jenis/tambah', [JenisController::class, 'create']);
Route::post('/jenis/simpan', [JenisController::class, 'store']);  
Route::get('/jenis/{id}/show', [JenisController::class, 'show']);  
Route::post('/jenis/{id}/update', [JenisController::class, 'update']);

Route::get('/dokumen', [DokumenController::class, 'index']);
Route::get('/dokumen/tambah', [DokumenController::class, 'create']);
Route::post('/dokumen/simpan', [DokumenController::class, 'store']);  
Route::get('/dokumen/{id}/show', [DokumenController::class, 'show']);  
Route::post('/dokumen/{id}/update', [DokumenController::class, 'update']);
Route::get('/dokumen/{id}/download', [DokumenController::class, 'download']);
Route::get('/dokumen/delete/{id}', [DokumenController::class, 'destroy']);
Route::get('/dokumen/{id}/detail', [DokumenController::class, 'detail']);

});