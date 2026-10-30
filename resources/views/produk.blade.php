@extends('layout.app')

@section('content')
    <section>
        <h1>Selamat Datang di Produk</h1>
    </section>

    <section>
        <div class="row ">
            @foreach ($produk as $data)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-4">
                    <div class="card pb-3 h-100" style="max-height: 30rem;">
                        <img src="{{ $data['gambar'] }}"
                            class="card-img-top w-100 object-fit-cover " alt="..."
                            style="height: 18rem; object-position: top;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data['judul'] }}</h5>
                            <p class="card-text">{{ $data['deskripsi'] }}</p>
                        </div>

                        <div class="card-body pt-0 d-flex justify-content-between align-items-center">
                            <p class="fw-bold text-secondary fs-5 m-0">Rp {{ number_format($data['harga']) }}</p>
                            <div>
                                <a href="#" class="btn btn-secondary">Detail</a>
                                <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
