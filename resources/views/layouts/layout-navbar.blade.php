<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper bg-dark d-flex align-items-center justify-content-center">
        <span class="fs20 text-bold text-white upper">
            {{-- <img src="http://sj-transindo.com/images/Header/logo-header-sjt2.png"  width="30%" height="20%"> --}}
        </span>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                {{-- <i class="icon-search"></i> --}}
                <i class="fas fa-globe"></i>
                <span class="ml-2 upper"><span class="bold text-dark">BMKG</span> | Badan Meteorologi, Klimatologi, dan Geofisika</span>
                </span>
            </div>
            {{-- <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search"> --}}
            </div>
        </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                {{-- <button type="button" class="btn btn-info font-weight-bold">+ Create New</button> --}}
            </li>
        <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
            {{-- <i class="icon-grid"></i> --}}
            </a>
        </li>
        <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <!-- <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p> -->
            {{-- <a class="dropdown-item preview-item">               
                <i class="icon-head"></i> Profile
            </a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
        </button>
    </div>
</nav>
