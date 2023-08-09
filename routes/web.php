<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

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



route::get('/index', [PenggunaController::class, 'index'])->name('pengguna.index')->middleware('Login');
route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create')->middleware('Login');
route::post('/pengguna/store', [PenggunaController::class, 'store'])->name('pengguna.store')->middleware('Login');
route::get('/pengguna/edit{data}', [PenggunaController::class, 'edit'])->name('pengguna.edit')->middleware('Login');
route::put('/pengguna/update{data}', [PenggunaController::class, 'update'])->name('pengguna.update')->middleware('Login');
route::delete('/pengguna/destroy{data}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy')->middleware('Login');
route::get('/pengguna/detail{data}', [PenggunaController::class, 'detail'])->name('pengguna.detail')->middleware('Login');


// login
Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'prosesLogin']);
Route::redirect('/','/login');

Route ::post('/register', [LoginController::class,'prosesRegister']);
Route::get('/register',[LoginController::class,'register'])->name('register');


Route::get('/logout',[LoginController::class,'logout']);
