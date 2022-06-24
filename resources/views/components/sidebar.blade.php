<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a>
                <img class="for-light" src="{{ asset('assets/images/logo-bapenda.png') }}" alt="" height="50"></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="menu">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('dashboard.index') }}"><img
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" height="36"></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img height="36"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav active" href="{{ route('dashboard.index') }}">
                            <i data-feather="home"></i>
                            <span>Beranda</span>
                        </a>
                    </li> --}}
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav active" href="{{ route('dashboard.index') }}">
                            <i data-feather="clock"></i>
                            <span>Absensi Harian</span>
                        </a>
                    </li>
                    @if(Auth::user()->role == 'admin')
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('user.index') }}">
                            <i data-feather="users"></i>
                            <span>Data Pegawai</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
