<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // hitung data dari database
        $jumlahProduk = Produk::count();
        $jumlahPelanggan = User::where('role', 'pelanggan')->count();


        return view(
            'admin.dashboard',

            [
                'title' => 'Admin Dashboard',
                'jumlahProduk' => $jumlahProduk,
                'jumlahPelanggan' => $jumlahPelanggan
            ]

        );
    }
    public function produk()
    {
        // DATA REAL   
        $dataProduk = Produk::all();

        return view('admin.produk.index', [
            'produk' => $dataProduk,
            'title' => 'Produk'
        ]);
    }

    public function createProduk()
    {
        return view('admin.produk.create', [
            'title' => 'Tambah Produk'
        ]);
    }

    public function storeProduk(Request $request)
    {

        // validasi input
        $validasi = $request->validate(
            [
                'nama' => 'required',
                'deskripsi' => 'required',
                'kategori' => 'required',
                'jenis' => 'required',
                'harga' => 'required',
                'stock' => 'required',
                'gambar' => 'required'
            ],

            // pesan error
            [
                'nama.required' => 'Nama produk harus diisi.',
                'deskripsi.required' => 'Deskripsi produk harus diisi.',
                'kategori.required' => 'Kategori produk harus diisi.',
                'jenis.required' => 'Jenis produk harus diisi.',
                'harga.required' => 'Harga produk harus diisi.',
                'stock.required' => 'Stok produk harus diisi.',
                'gambar.required' => 'Gambar produk harus diisi.'
            ]
        );

        // simpan gambar
        $gambar = $validasi['gambar']->store('produk', 'public');

        // simpan data ke database
        produk::create([
            'nama' => $validasi['nama'],
            'deskripsi' => $validasi['deskripsi'],
            'kategori' => $validasi['kategori'],
            'jenis' => $validasi['jenis'],
            'harga' => $validasi['harga'],
            'stock' => $validasi['stock'],
            'gambar' => $gambar
        ]);

        return redirect()->route('admin.produk.create')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function stok()
    {
        return view('admin.stok.index', [
            'title' => 'Kelola Stok'
        ]);
    }
    public function transaksi()
    {
        return view('admin.transaksi.index', [
            'title' => 'Kelola Transaksi'
        ]);
    }
    public function pelanggan()
    {
        return view('admin.pelanggan.index', [
            'title' => 'Kelola Pelanggan'
        ]);
    }
    public function laporan()
    {
        return view('admin.laporan.index', [
            'title' => 'Kelola Laporan'
        ]);
    }
    public function pengaturan()
    {
        return view('admin.pengaturan.index', [
            'title' => 'Kelola Pengaturan'
        ]);
    }
}
