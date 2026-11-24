@extends('admin.layouts.app')
@section('page_title', 'Dashboard')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <div>
            <h2 class="h4 fw-semibold mb-1">Ringkasan Dashboard</h2>
            <p class="text-secondary mb-0">Pantau aktivitas toko Bunga Piknik hari ini.</p>
        </div>
        <button class="btn btn-primary"><i class="bi bi-download me-2"></i>Unduh Laporan</button>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card admin-card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary">Total Produk</div>
                        <div class="fs-3 fw-semibold">{{ $jumlahProduk }}</div><span class="small text-success"><i
                                class="bi bi-arrow-up-short"></i> 8 bulan ini</span>
                    </div>
                    <div class="stat-icon bg-primary-subtle text-primary"><i class="bi bi-box-seam"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card admin-card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary">Pelanggan</div>
                        <div class="fs-3 fw-semibold">{{ $jumlahPelanggan }}</div><span class="small text-success"><i
                                class="bi bi-arrow-up-short"></i> 12% bulan ini</span>
                    </div>
                    <div class="stat-icon bg-success-subtle text-success"><i class="bi bi-people"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card admin-card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary">Pesanan Baru</div>
                        <div class="fs-3 fw-semibold">24</div><span class="small text-secondary">Perlu diproses</span>
                    </div>
                    <div class="stat-icon bg-warning-subtle text-warning"><i class="bi bi-receipt"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card admin-card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-secondary">Pendapatan</div>
                        <div class="fs-4 fw-semibold">Rp 8,4 jt</div><span class="small text-success"><i
                                class="bi bi-arrow-up-short"></i> 6% bulan ini</span>
                    </div>
                    <div class="stat-icon bg-info-subtle text-info"><i class="bi bi-wallet2"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-xl-8">
            <div class="card admin-card h-100">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center py-3">
                    <div>
                        <h3 class="h6 fw-semibold mb-1">Ringkasan Penjualan</h3><span class="small text-secondary">Data
                            penjualan dalam satu minggu</span>
                    </div><select class="form-select form-select-sm w-auto">
                        <option>Minggu ini</option>
                        <option>Bulan ini</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="chart-placeholder" aria-label="Placeholder grafik penjualan"></div>
                    <div class="d-flex justify-content-around text-secondary small mt-2">
                        <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card admin-card h-100">
                <div class="card-header py-3">
                    <h3 class="h6 fw-semibold mb-1">Produk Terlaris</h3><span class="small text-secondary">Bulan ini</span>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="stat-icon bg-danger-subtle text-danger"><i class="bi bi-flower2"></i></div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Bouquet Rose Pink</div>
                            <div class="small text-secondary">42 terjual</div>
                        </div><span class="fw-semibold">32%</span>
                    </div>
                    <div class="progress mb-4" style="height: 7px">
                        <div class="progress-bar" style="width: 75%"></div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="stat-icon bg-warning-subtle text-warning"><i class="bi bi-flower1"></i></div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Sunflower Picnic</div>
                            <div class="small text-secondary">28 terjual</div>
                        </div><span class="fw-semibold">24%</span>
                    </div>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-warning" style="width: 55%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card admin-card">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <div>
                <h3 class="h6 fw-semibold mb-1">Pesanan Terbaru</h3><span class="small text-secondary">Aktivitas transaksi
                    terkini</span>
            </div><a href="#" class="btn btn-sm btn-outline-primary">Lihat semua</a>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="ps-3">ID Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-3 fw-semibold">#BP-1024</td>
                        <td>Nadia Putri</td>
                        <td>22 Nov 2026</td>
                        <td>Rp 450.000</td>
                        <td><span class="badge text-bg-warning">Menunggu</span></td>
                        <td><a href="#" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td class="ps-3 fw-semibold">#BP-1023</td>
                        <td>Rizky Amelia</td>
                        <td>22 Nov 2026</td>
                        <td>Rp 275.000</td>
                        <td><span class="badge text-bg-success">Selesai</span></td>
                        <td><a href="#" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td class="ps-3 fw-semibold">#BP-1022</td>
                        <td>Dewi Lestari</td>
                        <td>21 Nov 2026</td>
                        <td>Rp 620.000</td>
                        <td><span class="badge text-bg-info">Diproses</span></td>
                        <td><a href="#" class="btn btn-sm btn-light"><i class="bi bi-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
