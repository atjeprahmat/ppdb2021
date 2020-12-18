<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/siswa', function () {
    return view('siswa/index');
});

Route::get('/siswa/dashboard', function () {
    return view('siswa/dashboard');
})->middleware('isSiswa');

Route::get('/siswa/login', function () {
    return view('akun_siswa/auth/login', ['url' => 'siswa']);
});

Route::post('/daftar',[siswaController::class, 'daftar']);
Route::get('/admin/dashboard', function(){return view('admin/dashboard');});

Route::multiauth('AkunSiswa', 'akun_siswa');
