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

    <style>
        :root {
            --admin-primary: #5267d9;
            --admin-dark: #20243a;
            --admin-muted: #85899b;
            --admin-bg: #f6f7fb;
        }

        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background: var(--admin-bg);
            color: #292d3e;
            font-size: 14px;
        }

        .admin-sidebar {
            width: 250px;
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #eceef4;
        }

        .admin-brand {
            color: var(--admin-primary);
            font-size: 20px;
            font-weight: 700;
        }

        .admin-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            color: #73788c;
            text-decoration: none;
            border-radius: 9px;
            margin-bottom: 4px;
        }

        .admin-nav-link:hover,
        .admin-nav-link.active {
            background: #eef0ff;
            color: var(--admin-primary);
        }

        .admin-nav-link i {
            font-size: 17px;
        }

        .admin-topbar {
            min-height: 72px;
            background: #fff;
            border-bottom: 1px solid #eceef4;
        }

        .admin-content {
            min-width: 0;
        }

        .admin-card {
            border: 1px solid #eceef4;
            border-radius: 13px;
            box-shadow: 0 3px 14px rgba(36, 44, 85, .035);
        }

        .place-items-center {
            place-items: center;
        }

        .admin-card .card-header {
            background: #fff;
            border-bottom: 1px solid #f0f1f5;
        }

        .stat-icon {
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            font-size: 20px;
        }

        .table thead th {
            color: var(--admin-muted);
            font-weight: 500;
            font-size: 12px;
            border-bottom-width: 1px;
        }

        .table td {
            vertical-align: middle;
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #eef0ff;
            color: var(--admin-primary);
            font-weight: 600;
        }

        .chart-placeholder {
            height: 230px;
            border-radius: 10px;
            background: repeating-linear-gradient(to bottom, #fff 0, #fff 45px, #eef0f5 46px, #fff 47px);
            position: relative;
            overflow: hidden;
        }

        .chart-placeholder:after {
            content: '';
            position: absolute;
            inset: 35% 0 0;
            background: linear-gradient(165deg, transparent 0 27%, #5267d9 27.5% 28.3%, transparent 28.8% 43%, #77c8ac 43.5% 44.3%, transparent 44.8%);
        }

        @media (max-width: 991.98px) {
            .admin-sidebar {
                width: 78px;
            }

            .admin-sidebar .brand-text,
            .admin-sidebar .nav-label,
            .admin-sidebar .sidebar-caption {
                display: none;
            }

            .admin-nav-link {
                justify-content: center;
            }

            .admin-nav-link i {
                font-size: 20px;
            }
        }

        @media (max-width: 575.98px) {
            .admin-sidebar {
                width: 62px;
            }

            .admin-topbar {
                min-height: 62px;
            }
        }
    </style>
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
