<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Session;
use App\Models\Product;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::post('/bayar/{id}', [HomeController::class, 'bayar']);


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegistrasiController::class, 'regis']);



Route::resource('/produk', KategoriController::class);



Route::prefix('/admin')->group(function () {
    Route::resource('/pesanan', PesananController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/user', UserController::class);
});

