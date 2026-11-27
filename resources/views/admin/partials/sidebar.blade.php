<aside class="admin-sidebar flex-shrink-0 p-3 p-lg-4">

    <a href="{{ route('admin') }}"
        class="admin-brand text-decoration-none d-flex justify-content-center align-items-center gap-2 mb-4 brand-text">BungaPiknik
    </a>

    <div class="sidebar-caption text-uppercase text-secondary small fw-semibold mb-2">Menu utama</div>
    <nav>
        <a href="{{ route('admin') }}" class="admin-nav-link {{ request()->routeIs('admin') ? 'active' : '' }}"
            title="Dashboard">
            <i class="bi bi-grid-1x2"></i><span class="nav-label">Dashboard</span>
        </a>
        <a href="{{ route('admin.produk.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.produk.index', 'admin.produk.create', 'admin.produk.edit') ? 'active' : '' }}" title="Produk">
            <i class="bi bi-box-seam"></i><span class="nav-label">Produk</span>
        </a>
        <a href="{{ route('admin.stok.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.stok.index') ? 'active' : '' }} " title="Stok"><i
                class="bi bi-inboxes"></i><span class="nav-label">Manajemen Stok</span></a>
        <a href="{{ route('admin.pelanggan.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.pelanggan.index') ? 'active' : '' }}"
            title="Pelanggan"><i class="bi bi-people"></i><span class="nav-label">Pelanggan</span></a>
        <a href="{{ route('admin.transaksi.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.transaksi.index') ? 'active' : '' }}"
            title="Transaksi"><i class="bi bi-receipt"></i><span class="nav-label">Transaksi</span></a>
        <a href="{{ route('admin.laporan.index') }}"
            class="admin-nav-link {{ request()->routeIs('admin.laporan.index') ? 'active' : '' }}" title="Laporan"><i
                class="bi bi-bar-chart-line"></i><span class="nav-label">Laporan</span></a>
    </nav>

    <div class="sidebar-caption text-uppercase text-secondary small fw-semibold mt-4 mb-2">Lainnya</div>
    <a href="{{ route('admin.pengaturan.index') }}"
        class="admin-nav-link {{ request()->routeIs('admin.pengaturan.index') ? 'active' : '' }}" title="Pengaturan"><i
            class="bi bi-gear"></i><span class="nav-label">Pengaturan</span></a>

    <a href="{{ route('admin.logout') }}"
        class="admin-nav-link btn-logout" title="Keluar"><i
            class="bi bi-box-arrow-right"></i><span class="nav-label">Keluar</span></a>


</aside>
