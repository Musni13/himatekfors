        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('hero') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HIMATEKFORS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <li class="nav-item {{ request()->routeIs('hero') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('hero') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-th-list"></i>
                    <span>Tentang</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">
                            <i class="fas fa-user-circle"></i>
                            <span>Profil</span>
                        </a>
                        <a class="collapse-item {{ request()->routeIs('admin.visi-misi') ? 'active' : '' }}" href="{{ route('admin.visi-misi') }}">
                            <i class="fas fa-window-restore"></i>
                            <span>Tujuan, Usaha & Sifat</span>
                        </a>
                        <a class="collapse-item {{ request()->routeIs('admin.struktur','struktur.create','struktur.edit','struktur.show') ? 'active' : '' }}" href="{{ route('admin.struktur') }}">
                            <i class="fas fa-sitemap"></i>
                            <span>Struktur</span>
                        </a>
                        <a class="collapse-item {{ request()->routeIs('admin.demisioner', 'demisioner.create', 'demisioner.edit','demisioner.show') ? 'active' : '' }}" href="{{ route('admin.demisioner') }}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Demisioner</span>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ request()->routeIs('informasi', 'informasi.create', 'informasi.show', 'informasi.edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('informasi') }}">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Informasi</span></a>
            </li>
            
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ request()->routeIs('admin.galeri', 'galeri.show', 'galeri.edit', 'galeri.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.galeri') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galeri</span></a>
            </li>
            
             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ request()->routeIs('admin.unduhan', 'unduhan.create', 'unduhan.show', 'unduhan.edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.unduhan') }}">
                    <i class="fas fa-file-download"></i>
                    <span>Unduhan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ request()->routeIs('saran') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('saran') }}">
                    <i class="fas fa-file-download"></i>
                    <span>Kotak Saran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item {{ request()->routeIs('database') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('database') }}">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Database</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->