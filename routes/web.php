<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

//route tugas pertama
Route::get('pertama', function () {
	return view('pertama');
});

//route tugas kedua
Route::get('mediaquery', function () {
	return view('mediaquery');
});

Route::get('linktree', function () {
	return view('linktree');
});

//route template bootstrap
Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

//route tugas bootstrap
Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

//route tugas layout
Route::get('layout4', function () {
	return view('layout4');
});


Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

//website make-over ETS
Route::get('index', function () {
	return view('index');
});

//route pertemuan 12
Route::get('dosen', [Coba::class, 'index']);
Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

//route blog
Route::get('blog', [BlogController::class, 'home']);
Route::get('blog/tentang', [BlogController::class, 'tentang']);
Route::get('blog/kontak', [BlogController::class, 'kontak']);
