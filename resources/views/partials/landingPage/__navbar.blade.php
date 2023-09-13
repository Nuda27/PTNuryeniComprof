<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="h-100 d-inline-flex align-items-center text-white">
                <span>Follow Us:</span>
                {{-- fb --}}
                @if($profile->facebook)
                <a class="btn btn-link text-light" href="{{ $profile->facebook }}" target="_blank">
                    <i class="fab fa-facebook-f"></i></a>
                @endif

                {{-- yt --}}
                @if($profile->youtube)
                <a class="btn btn-link text-light" href="{{ $profile->youtube }}" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                @endif

                {{-- linked --}}
                @if($profile->linkedin)
                <a class="btn btn-link text-light" href="{{ $profile->linkedin }}" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                @endif

                {{-- ig --}}
                @if($profile->instagram)
                <a class="btn btn-link text-light" href="{{ $profile->instagram }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                <span class="fs-5 fw-bold">
                    {{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="/" class="navbar-brand ps-5 me-0">
        {{-- <img src="{{ asset('logo/nyn.png') }}" alt="nyn" class="app-brand-logo demo" width="75"> --}}
        <h1 class="text-white m-0">Nuryeni</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            <a href="/#about" class="nav-item nav-link">About</a>
            <a href="/service" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Services</a>
            <a href="/struktur-organisasi" class="nav-item nav-link {{ (request()->is('struktur-organisasi')) ? 'active' : '' }}">Struktur Organisasi</a>
            <a href="/contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
        </div>
        {{-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> --}}
    </div>
</nav>
<!-- Navbar End -->
