@extends('layout.app')

@section('content')

    <h1>Selamat Datang di Kontak</h1>

    <section class="py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="h4 mb-2">Kirim Pesan</h2>
                        <p class="text-body-secondary mb-4">Punya pertanyaan? Tinggalkan pesan untuk kami.</p>

                        <form action="/tes" method="get">
                           {{-- csrf token --}}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
