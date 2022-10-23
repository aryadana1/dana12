<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_DetailController;

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

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/create',[AdminController::class,'create']);
Route::post('/admin/store',[AdminController::class,'store']);
Route::get('/admin/{id}/edit',[AdminController::class,'edit']);
Route::put('/admin/{id}/update',[AdminController::class,'update']);
Route::get('/admin/{id}/delete',[AdminController::class,'destroy']);

Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/create',[BarangController::class,'create']);
Route::post('/barang/store',[BarangController::class,'store']);
Route::get('/barang/{id}/edit',[BarangController::class,'edit']);
Route::put('/barang/{id}/update',[BarangController::class,'update']);
Route::get('/barang/{id}/delete',[BarangController::class,'destroy']);

Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/create',[JenisController::class,'create']);
Route::post('/jenis/store',[JenisController::class,'store']);
Route::get('/jenis/{id}/edit',[JenisController::class,'edit']);
Route::put('/jenis/{id}/update',[JenisController::class,'update']);
Route::get('/jenis/{id}/delete',[JenisController::class,'destroy']);

Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/supplier/create',[SupplierController::class,'create']);
Route::post('/supplier/store',[SupplierController::class,'store']);
Route::get('/supplier/{id}/edit',[SupplierController::class,'edit']);
Route::put('/supplier/{id}/update',[SupplierController::class,'update']);
Route::get('/supplier/{id}/delete',[SupplierController::class,'destroy']);

Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/create',[TransaksiController::class,'create']);
Route::post('/transaksi/store',[TransaksiController::class,'store']);
Route::get('/transaksi/{id}/edit',[TransaksiController::class,'edit']);
Route::put('/transaksi/{id}/update',[TransaksiController::class,'update']);
Route::get('/transaksi/{id}/delete',[TransaksiController::class,'destroy']);

Route::get('/transaksi_detail/{id}/detail',[Transaksi_DetailController::class,'index']);
Route::get('/transaksi_detail/create',[Transaksi_DetailController::class,'create']);
Route::post('/transaksi_detail/store',[Transaksi_DetailController::class,'store']);
Route::get('/transaksi_detail/{id}/edit',[Transaksi_DetailController::class,'edit']);
Route::put('/transaksi_detail/{id}/update',[Transaksi_DetailController::class,'update']);
Route::get('/transaksi_detail/{id}/delete',[Transaksi_DetailController::class,'destroy']);
