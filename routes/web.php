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

// proses login
Route::post('proses-login', [AuthController::class, "prosesLogin"])->name("proses.login");

// admin
Route::get('admin', [AdminController::class, "index"])->name("admin")->middleware('admin');

// logout
Route::get('admin/logout', [AuthController::class, "logout"])->name("admin.logout")->middleware('admin');

// testing
Route::get('tes', function (Request $request) {
   $pesan = $request->all();
   return "produk yang di cari adalah : " . $pesan['nama'];
});
