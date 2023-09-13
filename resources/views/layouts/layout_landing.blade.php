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

    <style>
        /*==========================================================================
         Blog
         ========================================================================== */
        .blog__area-item-image {
            position: relative;
            overflow: hidden;


        }

        .blog__area-item-image::before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 20%;
            height: 100%;
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
            background: rgba(255, 255, 255, 0.246);
        }

        .blog__area-item-image img {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transform: scale(1);
            transform: scale(1);

            object-fit: cover !important;
            object-position: center !important;
            height: 250px;
            width: 100%;
        }

        .blog__area-item-content {
            background: #ffff;
            padding: 40px 30px;
            -webkit-box-shadow: 0 30px 50px rgba(0, 0, 0, 0.05);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.05);
        }

        .blog__area-item-content-date {
            background: #FE8C12;
            padding: 2px 15px;
            display: inline-block;
            position: relative;
            bottom: 15px;
            margin-bottom: 15px;
        }

        .blog__area-item-content-date::before {
            position: absolute;
            content: '';
            right: -17px;
            top: 8px;
            border-left: 17px solid #FE8C12;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
        }

        .blog__area-item-content-date span {
            font-size: 14px;
            line-height: 24px;
            font-weight: 500;
            color: #ffff;
        }

        .blog__area-item-content-date span i::before {
            color: #ffff;
            margin-right: 10px;
        }

        .blog__area-item-content ul {
            padding: 20px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #E6E7E8;
        }

        .blog__area-item-content ul li:last-child {
            margin: 0;
        }

        .blog__area-item-content ul li {
            display: inline-block;
            margin-right: 20px;
            color: #686C73;
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
        }

        .blog__area-item-content ul li i::before {
            color: #FE8C12;
            margin-right: 10px;
            font-size: 18px;
        }

        .blog__area-item-content-btn a {
            display: inline-block;
            color: #02245B;
            font-size: 16px;
            line-height: 26px;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            position: relative;
        }

        .blog__area-item-content-btn a::after {
            position: absolute;
            content: '';
            width: 50px;
            height: 2px;
            background: #02245B;
            bottom: 0;
            left: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .blog__area-item-content-btn a:hover::after {
            width: 90px;
        }

        .blog__area-item:hover .blog__area-item-image::before {
            -webkit-animation: animation 0.95s;
            animation: animation 0.95s;
        }

        .blog__area-item:hover .blog__area-item-image img {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

    </style>
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
