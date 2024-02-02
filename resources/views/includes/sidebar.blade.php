<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header" data-aos="fade-right">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img src="/assets/img/icon.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">E-Perpus</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        @if (Auth::user()->role == 'ADMIN')
            <ul class="navbar-nav">
                <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item" data-aos="fade-right" data-aos-delay="400">
                    <a class="nav-link" href="{{ route('kategori-buku.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kategori Buku</span>
                    </a>
                </li>
                <li class="nav-item" data-aos="fade-right" data-aos-delay="600">
                    <a class="nav-link" href="{{ route('buku.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Buku</span>
                    </a>
                </li>
            </ul>
        @endif
        @if (Auth::user()->role == 'PETUGAS')
            <ul class="navbar-nav">
                <li class="nav-item" data-aos="fade-right" data-aos-delay="200">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Peminjaman</span>
                    </a>
                </li>
                <li class="nav-item" data-aos="fade-right" data-aos-delay="400">
                    <a class="nav-link" href="{{ route('kategori-buku.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kategori Buku</span>
                    </a>
                </li>
                <li class="nav-item" data-aos="fade-right" data-aos-delay="600">
                    <a class="nav-link" href="{{ route('buku.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Buku</span>
                    </a>
                </li>
            </ul>
        @endif

    </div>
    <div class="sidenav-footer mx-3" data-aos="fade-right" data-aos-delay="600">
        <a class="btn btn-danger btn-sm mb-0 w-100" href="{{ route('logout-pengelola') }}" type="button">Log
            Out</a>
    </div>
</aside>
