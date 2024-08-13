<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="index.html">
                    <h2 class="brand-text">Wisata Takalar</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{$dashboardbar ?? ''}} nav-item mt-2"><a class="d-flex align-items-center"
                    href="{{route('dashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>

            <li class=" navigation-header"><span data-i18n="Perencanaan">Konten</span><i
                data-feather="more-horizontal"></i>
            </li>
            <li class="{{$destinasibar ?? ''}} nav-item"><a class="d-flex align-items-center" href="{{route('destinasi.index')}}"><i
                        data-feather="file-text"></i><span class="menu-title text-truncate"
                        data-i18n="Destinasi">Destinasi</span></a>
            </li>
            <li class="{{$beritabar ?? ''}} nav-item"><a class="d-flex align-items-center" href="{{route('berita.index')}}"><i
                data-feather="archive"></i><span class="menu-title text-truncate"
                data-i18n="berita">Berita</span></a>
            </li>

            <li class=" navigation-header"><span data-i18n="Setting">Setting</span><i
                data-feather="more-horizontal"></i>

            <li class="{{$userbar ?? ''}} nav-item"><a class="d-flex align-items-center" href="{{route('user.index')}}"><i
                data-feather="file-text"></i><span class="menu-title text-truncate"
                data-i18n="User Management">User Management</span></a>
            </li>
            <li class="{{$kategoribar ?? ''}} nav-item"><a class="d-flex align-items-center" href="{{route('kategori.index')}}"><i
                data-feather="archive"></i><span class="menu-title text-truncate"
                data-i18n="kategori">Kategori</span></a>
            </li>
        </ul>
    </div>
</div>
