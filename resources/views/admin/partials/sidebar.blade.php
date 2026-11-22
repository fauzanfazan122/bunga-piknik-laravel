<aside class="admin-sidebar flex-shrink-0 p-3 p-lg-4">
    <a href="{{ route('admin') }}" class="admin-brand text-decoration-none d-flex align-items-center gap-2 mb-4">
        <i class="bi bi-flower1"></i><span class="brand-text">Bunga Piknik</span>
    </a>

    <div class="sidebar-caption text-uppercase text-secondary small fw-semibold mb-2">Menu utama</div>
    <nav>
        <a href="{{ route('admin') }}" class="admin-nav-link {{ request()->routeIs('admin') ? 'active' : '' }}" title="Dashboard">
            <i class="bi bi-grid-1x2"></i><span class="nav-label">Dashboard</span>
        </a>
        <a href="{{ route('admin.produk.index') }}" class="admin-nav-link {{ request()->routeIs('admin.produk.index') ? 'active' : '' }}" title="Produk">
            <i class="bi bi-box-seam"></i><span class="nav-label">Produk</span>
        </a>
        <a href="#" class="admin-nav-link" title="Stok"><i class="bi bi-inboxes"></i><span class="nav-label">Manajemen Stok</span></a>
        <a href="#" class="admin-nav-link" title="Pelanggan"><i class="bi bi-people"></i><span class="nav-label">Pelanggan</span></a>
        <a href="#" class="admin-nav-link" title="Transaksi"><i class="bi bi-receipt"></i><span class="nav-label">Transaksi</span></a>
        <a href="#" class="admin-nav-link" title="Laporan"><i class="bi bi-bar-chart-line"></i><span class="nav-label">Laporan</span></a>
    </nav>

    <div class="sidebar-caption text-uppercase text-secondary small fw-semibold mt-4 mb-2">Lainnya</div>
    <a href="#" class="admin-nav-link" title="Pengaturan"><i class="bi bi-gear"></i><span class="nav-label">Pengaturan</span></a>
</aside>
