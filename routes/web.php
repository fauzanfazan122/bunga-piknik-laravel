<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;


Route::get('/', [HomeController::class, "index"]);

// produk
Route::get('produk', [ProdukController::class, "index"])->name('produk');

// riwayat
Route::get('riwayat', function () {
   return view('riwayat', [
      'title' => 'Riwayat'
   ]);
})->name("riwayat");

// tentang
Route::get('tentang', function () {
   return view('tentang', [
      'title' => 'Tentang'
   ]);
})->name("tentang");

// kontak
Route::get('kontak', function () {
   return view('kontak', [
      'title' => 'Kontak'
   ]);
})->name("kontak");

// login
Route::get('login', [AuthController::class, "login"])->name("login");

// proses login`
Route::post('proses-login', [AuthController::class, "prosesLogin"])->name("proses.login");

// admin
Route::get('admin', [AdminController::class, "index"])->name("admin")->middleware('admin');


// admin produk
Route::get('admin/produk', [AdminController::class, "produk"])->name("admin.produk.index")->middleware('admin');

// admin produk create
Route::get('admin/produk/create', [AdminController::class, "createProduk"])->name("admin.produk.create")->middleware('admin');

// admin produk store
Route::post('admin/produk', [AdminController::class, "storeProduk"])->name("admin.produk.store")->middleware('admin');

// admin stok
Route::get('admin/stok', [AdminController::class, "stok"])->name("admin.stok.index")->middleware('admin');

// admin transaksi
Route::get('admin/transaksi', [AdminController::class, "transaksi"])->name("admin.transaksi.index")->middleware('admin');

// admin pelanggan
Route::get('admin/pelanggan', [AdminController::class, "pelanggan"])->name("admin.pelanggan.index")->middleware('admin');

// admin laporan
Route::get('admin/laporan', [AdminController::class, "laporan"])->name("admin.laporan.index")->middleware('admin');


// pengaturan
Route::get('admin/pengaturan', [AdminController::class, "pengaturan"])->name("admin.pengaturan.index")->middleware('admin');

// logout
Route::get('admin/logout', [AuthController::class, "logout"])->name("admin.logout")->middleware('admin');

// testing
Route::get('tes', function (Request $request) {
   $pesan = $request->all();
   return "produk yang di cari adalah : " . $pesan['nama'];
});
