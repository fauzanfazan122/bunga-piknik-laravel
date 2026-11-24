<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trim($__env->yieldContent('page_title', $title ?? 'Admin Bunga Piknik')) }} | Bunga Piknik</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    {{-- css global --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    {{-- custom css --}}
    @yield('css')
</head>

<body>
    <div class="d-flex min-vh-100">
        @include('admin.partials.sidebar')

        <div class="admin-content flex-grow-1">
            @include('admin.partials.topbar')

            <main class="p-3 p-lg-4">
                @yield('content')
            </main>

            <footer class="px-4 py-3 text-secondary small">© 2026 Bunga Piknik. Semua hak dilindungi.</footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
