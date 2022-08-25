<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukAdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/admin', function () {
//     return view('page.admin.index');
// })->name('admin');

//Route Pembeli
Route::get('/', [PembeliController::class, 'tampil'])->name('pembeli');
Route::get('/pembeli/show/{ID}', [DetailController::class, 'detail']);
Route::get('/kategori/{ID}', [PembeliController::class, 'kategori']);

//Route Dashboard Penjual Index
Route::get('/penjual', [PenjualController::class, 'tampil'])->middleware('dafToko','confirmed');
Route::get('/penjual/form', [PenjualController::class, 'form'])->middleware('verPenjual');
Route::post('/penjual/store', [PenjualController::class, 'store']);
Route::get('/penjual/verifikasi', [PenjualController::class, 'verifikasi'])->middleware('check');
Route::post('/penjual/validator/{ID}', [PenjualController::class, 'validasi'])->middleware('check');

//Route Penjual Product
Route::get('/produks', [ProdukController::class, 'tampil'])->middleware('Batas');
Route::get('/produk/form', [ProdukController::class, 'form'])->middleware('Batas');
Route::post('/produk/store', [ProdukController::class, 'store'])->middleware('Batas');
Route::get('/produk/edit/{ID}', [ProdukController::class, 'edit'])->middleware('Batas');
Route::put('/produk/update/{ID}', [ProdukController::class, 'update'])->middleware('Batas');
Route::delete('/produk/delete/{ID}', [ProdukController::class, 'delete'])->middleware('Batas');

//Route Admin
Route::get('/admn', [AdminController::class, 'index'])->middleware('verAdmin')->name('admin');
Route::get('/admn/toko', [AdminController::class, 'toko'])->middleware('verAdmin');
Route::put('/admn/toko/confirmed/{ID}', [AdminController::class, 'confirmed'])->middleware('verAdmin');
Route::get('/admn/produk', [AdminController::class, 'produk'])->middleware('verAdmin');
Route::get('/admn/user', [AdminController::class, 'user'])->middleware('verAdmin');
Route::get('/admn/pesan', [AdminController::class, 'pesan'])->middleware('verAdmin');

//Route Kategori
Route::get('/admn/kategori', [KategoriController::class, 'index'])->middleware('verAdmin');
Route::post('/admn/kategori/store', [KategoriController::class, 'store'])->middleware('verAdmin');

//Route Tambah Ke Keranjang
Route::get('/tambah-ke-keranjang/{produkID}', [KeranjangController::class, 'tambah']);

//Route Pesan
Route::post('/pesan/{ID}', [PesanController::class, 'pesan']);
Route::get('/checkout', [PesanController::class, 'checkout']);
Route::get('/konfirmasi', [PesanController::class, 'konfirmasi']);
Route::get('/pesan', [PesanController::class, 'tampilpesan'])->middleware('Batas');
Route::get('/struk/{ID}', [PesanController::class, 'struk']);

//Route Mengirim Email
Route::get('/kirim/{ID}', [MailController::class, 'kirimemail'])->name('email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
