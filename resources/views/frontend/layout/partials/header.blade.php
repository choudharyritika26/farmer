<div class="container pt-3 pb-4">
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class=" text-center">
                    <a class="navbar-brand" href="index.html">Sardar Agro <span>Tanda</span></a>
                </div>
                {{-- <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                    <form action="#" class="searchform order-lg-last">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control pl-3" placeholder="Search">
                            <button type="submit" placeholder="" class="form-control search"><span
                                    class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
        <div class="col-ml-1 d-flex">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    {{-- <a href="#" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> --}}
                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="{{ route('frontend.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    {{-- <a class="nav-link dropdown-toggle" href="{{ route('frontend.about') }}" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a> --}}
                    <a href="{{ route('frontend.about') }}" class="nav-link">About us</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('frontend.management') }}">Management</a>
                        <a class="dropdown-item" href="#">Vision and Mission</a>
                </li>
                {{-- <li class="nav-item"><a href="{{ route('frontend.about') }}" class="nav-link">About us</a></li> --}}
                <li class="nav-item"><a href="{{ route('frontend.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('frontend.gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item dropdown">
                    <a href="{{ route('frontend.product') }}" class="nav-link">Our Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Cultivators</a>
                        <a class="dropdown-item" href="#">Tractor Trolley</a>
                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div> --}}
                </li>
                <li class="nav-item"><a href="{{ route('frontend.singleproduct') }}" class="nav-link">Single-Product</a></li>
                
                <li class="nav-item"><a href="{{ route('frontend.contact') }}" class="nav-link">Contact</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
