<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
                <img src="{{ asset('images/brand/logo.png') }}" height="40" width="70">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
                Pasar 4.0
            </span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    @auth
    <li class="nav-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-user-alt fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Users') }}</span>
        </a>
    </li>
    @endauth

    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
        <a href="{{ route('about') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('About us') }}</span>
        </a>
    </li>

    <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse"
            data-bs-target="#submenu-table">
            <span>
                <span class="sidebar-icon me-3">
                    <i class="fas fa-table fa-fw"></i>
                </span>
                <span class="sidebar-text">Master Data</span>
            </span>
            <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-table" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item">
                    <a href="{{ route('pasar') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Data Pasar') }}</span>
                    </a>
                    <a href="{{ route('tenant') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Data Kios') }}</span>
                    </a>
                    <a href="{{ route('pemilik') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Data Pedagang') }}</span>
                    </a>
                    <a href="{{ route('pengelola') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Data Pengelola') }}</span>
                    </a>
                    @auth
                    <a href="{{ route('riwayat_pemilik') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Riwayat Pedagang') }}</span>
                    </a>
                    <a href="{{ route('riwayat_iuran') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Riwayat Iuran') }}</span>
                    </a>
                    @endauth
                    
                </li>
            </ul>
        </div>
    </li>
    @auth
    <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse"
            data-bs-target="#submenu-report">
            <span>
                <span class="sidebar-icon me-3">
                    <i class="fas fa-book fa-fw"></i>
                </span>
                <span class="sidebar-text">Report</span>
            </span>
            <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-report" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-icon">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">Data Pasar</span>
                    </a>
                    <a class="nav-link" href="#">
                        <span class="sidebar-icon">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">Data Kios</span>
                    </a>
                    <a class="nav-link" href="#">
                        <span class="sidebar-icon">
                            <i class="fas"></i>
                        </span>
                        <span class="sidebar-text">Data Pedagang</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endauth
    <li class="nav-item {{ request()->routeIs('guest') ? 'active' : '' }}">
        <a href="{{ route('guest') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Halaman Utama') }}</span>
        </a>
    </li>
</ul>
