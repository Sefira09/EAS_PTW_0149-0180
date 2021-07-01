<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
route::post('/register/add',[UserController::class,'register']);
route::post('/login',[UserController::class,'login']);
route::get('/logout',[UserController::class,'logout']);

Route::get('/admin/produk',[AdminController::class,'produk']);
Route::post('/admin/produk/tambah/aksi',[AdminController::class,'produk_tambah']);
Route::get('/admin/produk/tambah', function () {return view('admin.tambah_barang'); });
Route::get('/admin/produk/edit/{id}',[AdminController::class,'produk_edit']);
Route::post('/admin/produk/edit/act',[AdminController::class,'produk_editAct']);
Route::get('/admin/user',[AdminController::class,'user']);
Route::get('/admin/user/hapus/{id}',[AdminController::class,'user_hapus']);
Route::get('/admin/transaksi',[AdminController::class,'transaksi']);
Route::get('/admin/laporan',[AdminController::class,'laporan']);
Route::get('/admin/transaksi/{id}',[AdminController::class,'detail_transaksi']);
Route::get('/admin/transaksi/kirim/{id}',[AdminController::class,'kirim']);


Route::get('/user', [UserController::class,'index']);
Route::post('/user/produk/pesan/', [UserController::class,'pesan']);
Route::get('/user/produk/{id}', [UserController::class,'produk']);
Route::get('/user/keranjang', [UserController::class,'keranjang']);
route::get('/user/keranjang/batal/{id}', [UserController::class,'keranjang_batal']);
route::post('/user/beli',[UserController::class,'beli']);
route::get('/user/pembelian',[UserController::class,'pembelian']);
route::get('/user/pembelian/terima/{id}',[UserController::class,'terima']);
