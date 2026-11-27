@extends('admin.layouts.app')
@section('page_title', 'Produk')
@section('content')

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <div>
            <h2 class="h4 fw-semibold mb-1">Daftar Produk</h2>
            <p class="text-secondary mb-0">Kelola produk bunga dan perlengkapan piknik.</p>
        </div>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-2"></i>Tambah
            Produk</a>
    </div>

    <div class="card admin-card">
        <div class="card-body border-bottom">
            <div class="row g-2">
                <div class="col-md-5">
                    <div class="input-group"><span class="input-group-text bg-white"><i
                                class="bi bi-search"></i></span><input class="form-control"
                            placeholder="Cari nama produk..."></div>
                </div>
                <div class="col-md-3"><select class="form-select">
                        <option>Semua kategori</option>
                        <option>Bunga Segar</option>
                        <option>Bucket Bunga</option>
                        <option>Wedding Bucket</option>
                    </select></div>
                <div class="col-md-2"><select class="form-select">
                        <option>Semua Jenis</option>
                        <option>Penjualan</option>
                        <option>Penyewaan</option>
                    </select></div>
                <div class="col-md-2"><button class="btn btn-outline-secondary w-100"><i
                            class="bi bi-filter me-1"></i>Filter</button></div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="p3">Produk</th>
                        <th>Kategori</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $items)
                        <tr>
                            <td class="ps-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="produk-gambar bg-danger-subtle text-danger"><img src="{{ asset('storage/' . $items->gambar) }}"
                                            alt="{{ $items->nama }}" class="img-fluid"></div>
                                    <span class="fw-semibold">{{ $items->nama }}</span>
                                </div>
                            </td>
                            <td>{{ $items->kategori }}</td>
                            <td>{{ $items->jenis }}</td>
                            <td>Rp {{ number_format($items->harga, 0, ',', '.') }}</td>
                            <td>{{ $items->stock }}</td>
                            <td><a href="#" class="btn btn-sm btn-light"><i class="bi bi-three-dots"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center p-3 text-secondary small"><span>Menampilkan 3 dari 128
                produk</span>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">‹</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">›</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
