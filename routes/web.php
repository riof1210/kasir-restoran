<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth' , 'role:admin']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('pelanggan', PelangganController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('barangs', BarangController::class);
    Route::resource('transaksis', TransaksiController::class);
    Route::resource('pesans', PesanController::class);
});
