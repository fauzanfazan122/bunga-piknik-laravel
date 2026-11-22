@extends('admin.layouts.app')
@section('page_title', 'Laporan')
@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <div>
            <h2 class="h4 fw-semibold mb-1">Laporan</h2>
            <p class="text-secondary mb-0">Ringkasan penjualan dan transaksi toko.</p>
        </div><button class="btn btn-primary"><i class="bi bi-download me-2"></i>Ekspor Laporan</button>
    </div>
    <div class="card admin-card mb-3">
        <div class="card-body">
            <div class="row g-3 align-items-end">
                <div class="col-md-4"><label class="form-label">Jenis Laporan</label><select class="form-select">
                        <option>Laporan Penjualan</option>
                        <option>Laporan Penyewaan</option>
                        <option>Laporan Produk</option>
                    </select></div>
                <div class="col-md-3"><label class="form-label">Dari Tanggal</label><input type="date"
                        class="form-control"></div>
                <div class="col-md-3"><label class="form-label">Sampai Tanggal</label><input type="date"
                        class="form-control"></div>
                <div class="col-md-2"><button class="btn btn-outline-primary w-100">Tampilkan</button></div>
            </div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <div class="card admin-card">
                <div class="card-body">
                    <div class="text-secondary">Total Penjualan</div>
                    <div class="fs-4 fw-semibold">Rp 24.850.000</div><span class="small text-success">Periode bulan
                        ini</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card admin-card">
                <div class="card-body">
                    <div class="text-secondary">Pesanan Selesai</div>
                    <div class="fs-4 fw-semibold">186</div><span class="small text-secondary">Transaksi berhasil</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card admin-card">
                <div class="card-body">
                    <div class="text-secondary">Rata-rata Pesanan</div>
                    <div class="fs-4 fw-semibold">Rp 133.602</div><span class="small text-secondary">Nilai per
                        pesanan</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card admin-card">
        <div class="card-header py-3">
            <h3 class="h6 fw-semibold mb-0">Rincian Penjualan</h3>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="ps-3">Tanggal</th>
                        <th>Jumlah Transaksi</th>
                        <th>Penjualan Produk</th>
                        <th>Penyewaan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-3">22 Nov 2026</td>
                        <td>18</td>
                        <td>Rp 2.150.000</td>
                        <td>Rp 850.000</td>
                        <td class="fw-semibold">Rp 3.000.000</td>
                    </tr>
                    <tr>
                        <td class="ps-3">21 Nov 2026</td>
                        <td>15</td>
                        <td>Rp 1.875.000</td>
                        <td>Rp 625.000</td>
                        <td class="fw-semibold">Rp 2.500.000</td>
                    </tr>
                    <tr>
                        <td class="ps-3">20 Nov 2026</td>
                        <td>21</td>
                        <td>Rp 2.600.000</td>
                        <td>Rp 900.000</td>
                        <td class="fw-semibold">Rp 3.500.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
