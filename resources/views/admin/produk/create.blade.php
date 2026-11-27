@extends('admin.layouts.app')
@section('page_title', 'Tambah Produk')
@section('content')
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="text-decoration-none text-black"
                        href="{{ route('admin.produk.index') }}">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
            </ol>
        </nav>
        <h2 class="h4 fw-semibold mb-1">Tambah Produk</h2>
        <p class="text-secondary mb-0">Lengkapi informasi produk baru.</p>
    </div>

    {{-- alert --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card admin-card">
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="card-body p-4">
            @csrf
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-3"><label class="form-label">Nama Produk</label><input value="{{ old('nama') }}"
                            name="nama" class="form-control" placeholder="Contoh: Bouquet Rose Pink">
                        @error('nama')
                            <p class="mt-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label">Kategori</label><select
                                value="{{ old('kategori') }}" name="kategori" class="form-select">
                                <option value="">Pilih kategori</option>
                                <option value="bunga segar">Bunga Segar</option>
                                <option value="bucket bunga">Bucket Bunga</option>
                                <option value="wedding bucket">Wedding Bucket</option>
                            </select>
                            @error('kategori')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-6"><label class="form-label">Jenis</label><select value="{{ old('jenis') }}"
                                name="jenis" class="form-select">
                                <option value="penjualan">Penjualan</option>
                                <option value="penyewaan">Penyewaan</option>
                            </select>
                            @error('jenis')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="form-label">Harga (Rp)</label><input value="{{ old('harga') }}"
                                name="harga" type="number" class="form-control" placeholder="250000">
                            @error('harga')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="form-label">Stok</label><input value="{{ old('stock') }}"
                                name="stock" type="number" class="form-control" placeholder="0">
                            @error('stock')
                                <p class="mt-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="mt-3"><label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsikan produk...">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="mt-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4"><label class="form-label">Foto Produk</label>
                    <div class="border rounded-3 bg-light text-center p-5"><i
                            class="bi bi-cloud-arrow-up fs-1 text-primary"></i>
                        <p class="mb-1 mt-2 fw-semibold">Unggah gambar</p><span class="small text-secondary">PNG, JPG hingga
                            2 MB</span><input value="{{ old('gambar') }}" name="gambar" type="file" accept="image/*"
                            class="form-control mt-3 ">
                        @error('gambar')
                            <p class="mt-2 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-3"><a href="#"
                    class="btn btn-light">Batal</a><button class="btn btn-primary">Simpan Produk</button></div>

        </form>

    </div>
@endsection
