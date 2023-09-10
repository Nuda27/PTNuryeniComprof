<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ asset('assetsLanding/favicon.ico') }}" rel="icon"> --}}
    <link rel="shortcut icon" href="{{ asset('assetsLanding/img/logo.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assetsLanding/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsLanding/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assetsLanding/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assetsLanding/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> --}}
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('partials.landingPage.__navbar')
    <!-- Navbar End -->

    {{-- Content Start --}}
    @yield('content')
    {{-- Content End --}}

    <!-- Footer Start -->
    @include('partials.landingPage.__footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="/" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsLanding/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assetsLanding/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assetsLanding/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assetsLanding/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsLanding/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assetsLanding/js/main.js') }}"></script>
</body>

</html>
