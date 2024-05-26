<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="{{ asset('Assets/img/cashier-counter.png') }}" alt="Cashier Machine">
        <div class="sidebar-brand-text mx-3">LA KASIR</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <x-nav-link href="{{ route('adm.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </x-nav-link>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Master Data</span>
        </a>

        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('adm/categories.*') ? 'active' : '' }}"
                    href="{{ url('adm/categories') }}" wire:navigate>
                    Category
                </a>

                <a class="collapse-item {{ request()->routeIs('adm/items.*') ? 'active' : '' }}"
                    href="{{ url('adm/items') }}" wire:navigate>
                    Item
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <x-nav-link href="#">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span>
        </x-nav-link>
    </li>

    <li class="nav-item">
        <x-nav-link href="{{ url('adm/reports/sale') }}">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Report Penjualan</span>
        </x-nav-link>
    </li>

    <li class="nav-item">
        <x-nav-link :active="request()->routeIs('adm.users.index')" href="{{ url('adm/users') }}">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>User Management</span>
        </x-nav-link>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
