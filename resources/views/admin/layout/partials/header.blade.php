<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.index') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Farmer Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('admin/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    {{-- <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span> --}}
                </a><!-- End Profile Iamge Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        {{-- <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('slider-index') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('about-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('gallery-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Gallery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('services-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Services</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('product-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('singleproduct-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Single Product</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('contactusdetales-index')}}">
                <i class="bi bi-file-earmark"></i>
                <span>Contact Us</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav --> --}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

                <i class="bi bi-box-arrow-in-right"></i>

                <span>Logout</span>
            </a>
        </li>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
