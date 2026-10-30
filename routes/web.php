<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;


Route::get('/', [HomeController::class, "index"]);

// produk
Route::get('produk', [ProdukController::class, "index"]) -> name('produk');

// riwayat
Route::get('riwayat', function(){
   return view('riwayat', [
      'title' => 'Riwayat'
   ]);
})->name("riwayat");

// tentang
Route::get('tentang', function(){
   return view('tentang', [
      'title' => 'Tentang'
   ]);
})->name("tentang");

// kontak
Route::get('kontak', function(){
   return view('kontak', [
      'title' => 'Kontak'
   ]);
})->name("kontak");

// testing
Route::get('tes', function(Request $request){
   $pesan = $request->all();
   return "produk yang di cari adalah : " . $pesan['nama'];
});
