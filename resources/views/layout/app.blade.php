<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>

</head>

<body>

    {{-- navbar --}}
    <header class="position-sticky top-0 z-1">
        <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-1 border-tertiary">
            <div class="container-fluid px-4">
                <a class="navbar-brand text-primary fw-bold" href="#">BungaPiknik</a>

                <div class="d-flex align-items-center gap-3">
                    <a class="d-lg-none d-md-inline-block btn btn-primary" href="#">Login</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="mx-2 nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="mx-2 nav-link" href="{{ route('produk') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="mx-2 nav-link" href="{{ route('riwayat') }}">Riwayat</a>
                        </li>
                        <li class="nav-item">
                            <a class="mx-2 nav-link" href="{{ route('tentang') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="mx-2 nav-link" href="{{ route('kontak') }}">Kontak</a>
                        </li>
                    </ul>
                </div>

                <a class="d-lg-inline-block d-none btn btn-primary" href="#">Login</a>

            </div>

        </nav>
    </header>

    {{-- konten --}}
    <main class="container-fluid p-4 min-vh-100">
        @yield('content')
    </main>

    {{-- footer --}}
    <footer class="bg-dark text-white mt-4 py-3">
        <div class="container text-center">
            <p class="mb-0">© 2026 Bunga Piknik. Semua hak dilindungi.</p>
        </div>
    </footer>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
