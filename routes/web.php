<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;

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

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/form', [DashboardController::class, 'form'])->middleware('auth');
Route::get('/form_pembayaran', [DashboardController::class, 'form_pembayaran'])->middleware('auth');
Route::get('/faq', [DashboardController::class, 'faq'])->middleware('auth');
Route::get('/bayar', [DashboardController::class, 'bayar'])->middleware('auth');
Route::post('/bayar', [DashboardController::class, 'bayar'])->middleware('auth');
Route::post('/pesan', [DashboardController::class, 'pesan'])->middleware('auth');
Route::post('/form', [DataController::class, 'insertform'])->middleware('auth');
Route::get('/file', [DataController::class, 'file'])->middleware('auth');
Route::post('/file', [DataController::class, 'uploadfile'])->middleware('auth');


// Route Untuk Para Admin 

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->middleware('auth','ceklevel:admin');
Route::post('/admin', [AdminController::class, 'loginadmin']);
// Route::get('/admlogout', [AdminController::class, 'logoutadmin']);
Route::post('/admlogout', [AdminController::class, 'logoutadmin']);
Route::get('/datasiswa', [AdminController::class, 'datasiswa'])->middleware('auth','ceklevel:admin');
Route::get('/dataortu', [AdminController::class, 'dataortu'])->middleware('auth','ceklevel:admin');
Route::get('/datapendidikan', [AdminController::class, 'datapendidikan'])->middleware('auth','ceklevel:admin');
Route::get('/datapesan', [AdminController::class, 'datapesan']);
Route::get('/datapembayaran', [AdminController::class, 'datapembayaran'])->middleware('auth','ceklevel:admin');
Route::get('/datauser', [AdminController::class, 'datauser'])->middleware('auth','ceklevel:admin');
Route::get('/datajurusan', [AdminController::class, 'jurusan'])->middleware('auth','ceklevel:admin');
Route::get('/formjurusan', [AdminController::class, 'formjurusan'])->middleware('auth','ceklevel:admin');
Route::post('/tambahjurusan', [AdminController::class, 'addjurusan'])->middleware('auth','ceklevel:admin');
Route::get('/editjurusan/{id}', [AdminController::class, 'editjurusan'])->middleware('auth','ceklevel:admin');
Route::post('/ejurusan/{id}', [AdminController::class, 'ejurusan'])->middleware('auth','ceklevel:admin');
Route::delete('/deletejurusan/{id}', [AdminController::class, 'deljurusan'])->middleware('auth','ceklevel:admin');
Route::get('/databerkas', [AdminController::class, 'databerkas'])->middleware('auth','ceklevel:admin');

Route::get('/tampiluser/{id_siswa}', [AdminController::class, 'show']);
Route::delete('/deletedata/{id_siswa}', [AdminController::class, 'destroy']);
Route::get('/tampildata/{id_siswa}', [AdminController::class, 'update']);
Route::put('/updated/{id_siswa}', [AdminController::class, 'updated']);
Route::get('/hasil',[DashboardController::class, 'hasil']);
