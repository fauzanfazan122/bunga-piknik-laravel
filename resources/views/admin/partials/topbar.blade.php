<header class="admin-topbar d-flex justify-content-between align-items-center px-3 px-lg-4">
    <div>
        <div class="text-secondary small">Panel Admin</div>
        <h1 class="h5 fw-semibold mb-0">@yield('page_title', $title ?? 'Dashboard')</h1>
    </div>
    <div class="d-flex align-items-center gap-3">
        <button type="button" class="btn btn-light position-relative" aria-label="Notifikasi">
            <i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
        </button>
        <div class="d-flex align-items-center gap-2">
            <div class="admin-avatar">AD</div>
            <div class="d-none d-md-block"><div class="fw-semibold">Administrator</div><div class="text-secondary small">Admin</div></div>
        </div>
        <a href="#" class="btn btn-outline-secondary btn-sm" title="Keluar"><i class="bi bi-box-arrow-right"></i></a>
    </div>
</header>
