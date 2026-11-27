@extends('admin.layouts.app')
@section('page_title', 'Edit Produk')
@section('content')
    <div class="mb-4">
        
        <h2 class="h4 fw-semibold mb-1">Edit Produk</h2>
        <p class="text-secondary mb-0">Perbarui informasi produk.</p>
    </div>
    <div class="card admin-card">
        <div class="card-body p-4">
            <div class="row g-3">
                <div class="col-md-8"><label class="form-label">Nama Produk</label><input class="form-control"
                        value="Bouquet Rose Pink"></div>
                <div class="col-md-4"><label class="form-label">Kategori</label><select class="form-select">
                        <option>Buket Bunga</option>
                        <option>Paket Piknik</option>
                    </select></div>
                <div class="col-md-4"><label class="form-label">Harga (Rp)</label><input class="form-control"
                        value="250000"></div>
                <div class="col-md-4"><label class="form-label">Stok</label><input class="form-control" value="18">
                </div>
                <div class="col-md-4"><label class="form-label">Status</label><select class="form-select">
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select></div>
                <div class="col-12"><label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="4">Buket bunga mawar pink segar untuk momen spesial.</textarea>
                </div>
                <div class="col-12"><label class="form-label">Ganti Foto Produk</label><input type="file"
                        class="form-control"></div>
            </div>
            <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-3"><a href="#"
                    class="btn btn-light">Batal</a><button class="btn btn-primary">Simpan Perubahan</button></div>
        </div>
    </div>
@endsection
