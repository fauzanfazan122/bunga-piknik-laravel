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
        return view(
            'admin.produk.index',
            [
                'title' => 'Kelola Produk'
            ]
        );
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
