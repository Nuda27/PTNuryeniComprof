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


        /*==========================================================================
        Blog Details
        ========================================================================== */

        .blog__details .blog__details-left-image img {
            object-fit: cover;
            object-position: center;
            height: 410px;
            width: 100%;
        }

        .blog__details-left-content h3 {
            font-size: 30px;
            line-height: 40px;
        }

        .blog__details-left-content-date {
            background: #FE8C12;
            padding: 5px 15px;
            position: relative;
        }

        .blog__details-left-content-date::before {
            position: absolute;
            content: '';
            right: -17px;
            top: 10px;
            border-left: 17px solid #FE8C12;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
        }

        .blog__details-left-content ul {
            padding: 20px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #E6E7E8;
        }

        .blog__details-left-content ul li:last-child {
            margin: 0;
        }

        .blog__details-left-content ul li {
            display: inline-block;
            color: #686C73;
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
        }

        .blog__details-left-content ul li i::before {
            color: #FE8C12;
            margin-right: 10px;
            font-size: 18px;
        }

        .blog__details-left-content ul li span {
            font-size: 14px;
            line-height: 24px;
            font-weight: 500;
            color: #ffff;
        }

        .blog__details-left-content ul li span i::before {
            color: #ffff;
            margin-right: 10px;
        }

        .blog__details-left-content-box {
            background: #F5F5F5;
            padding: 30px 40px;
        }

        .blog__details-left-content-box h6 {
            font-size: 16px;
            line-height: 26px;
            font-weight: 700;
            font-style: italic;
        }

        .blog__details-left-content-box span {
            font-size: 14px;
            line-height: 24px;
            font-weight: 700;
            font-family: "Open Sans", sans-serif;
            display: inline-block;
            text-transform: uppercase;
            padding-left: 40px;
            position: relative;
        }

        .blog__details-left-content-box span::before {
            position: absolute;
            content: '';
            width: 30px;
            height: 3px;
            left: 0;
            top: 10px;
            background: #FE8C12;
        }

        .blog__details-left-related {
            border-bottom: 1px solid #E6E7E8;
            padding-bottom: 30px;
        }

        .blog__details-left-related h6 {
            font-size: 16px;
            line-height: 26px;
            font-weight: 700;
        }

        .blog__details-left-related-tag a {
            display: inline-block;
            background: #F5F5F5;
            color: #030A15;
            font-size: 14px;
            font-weight: 700;
            height: 40px;
            line-height: 40px;
            padding: 0 20px;
            text-transform: uppercase;
            font-family: "Open Sans", sans-serif;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .blog__details-left-related-tag a:hover {
            background-color: #FE8C12;
            color: #ffff;
        }

        .blog__details-left-related-share ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .blog__details-left-related-share ul li:last-child {
            margin: 0;
        }

        .blog__details-left-related-share ul li i::before {
            font-size: 15px;
        }

        .blog__details-left-comment-area-item {
            background: #F5F5F5;
            padding: 30px;
            margin-left: 40px;
        }

        .blog__details-left-comment-area-item-user {
            float: left;
            margin-left: -70px;
        }

        .blog__details-left-comment-area-item-user img {
            width: 100%;
            border-radius: 50%;
        }

        .blog__details-left-comment-area-item-details {
            overflow: hidden;
            padding-left: 30px;
        }

        .blog__details-left-comment-area-item-details-name {
            position: relative;
            overflow: hidden;
        }

        .blog__details-left-comment-area-item-details-name p {
            font-size: 14px;
            color: #FE8C12;
            padding: 5px 0;
            font-weight: 500;
        }

        .blog__details-left-comment-area-item-details-name a {
            position: absolute;
            top: 0;
            background: #FE8C12;
            font-weight: 600;
            right: 0;
            padding: 5px 18px;
            color: #ffff;
            border-radius: 3px;
            display: inline-block;
        }

        .blog__details-left-contact-area input {
            background: #F5F5F5;
        }

        .blog__details-left-contact-area textarea {
            background: #F5F5F5;
        }


        /*==========================================================================
        Blog Details
        ========================================================================== */
        .blog__standard-left-item-content {
            background: #ffff;
            -webkit-box-shadow: 0 30px 50px rgba(0, 0, 0, 0.05);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.05);
            padding: 10px 30px 30px 30px;
        }

        .blog__standard-left-item-content h3 {
            font-size: 30px;
            line-height: 40px;
        }

        .blog__standard-left-item-content-date {
            background: #FE8C12;
            padding: 5px 15px;
            position: relative;
        }

        .blog__standard-left-item-content-date::before {
            position: absolute;
            content: '';
            right: -17px;
            top: 10px;
            border-left: 17px solid #FE8C12;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
        }

        .blog__standard-left-item-content ul {
            padding: 20px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #E6E7E8;
        }

        .blog__standard-left-item-content ul li:last-child {
            margin: 0;
        }

        .blog__standard-left-item-content ul li {
            display: inline-block;
            color: #686C73;
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
        }

        .blog__standard-left-item-content ul li i::before {
            color: #FE8C12;
            margin-right: 10px;
            font-size: 18px;
        }

        .blog__standard-left-item-content ul li span {
            font-size: 14px;
            line-height: 24px;
            font-weight: 500;
            color: #ffff;
        }

        .blog__standard-left-item-content ul li span i::before {
            color: #ffff;
            margin-right: 10px;
        }

        .blog__standard-left-item-content a {
            display: inline-block;
            color: #FE8C12;
            font-size: 16px;
            line-height: 26px;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            position: relative;
        }

        .blog__standard-left-item-content a::after {
            position: absolute;
            content: '';
            width: 50px;
            height: 2px;
            background: #FE8C12;
            bottom: 0;
            left: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .blog__standard-left-item-content a:hover::after {
            width: 80px;
        }

        .blog__sidebar-item {
            background: #F5F5F5;
            padding: 40px 30px;
        }

        .blog__sidebar-item h4 {
            position: relative;
        }

        .blog__sidebar-item h4::before {
            position: absolute;
            content: '';
            width: 30px;
            height: 4px;
            bottom: -5px;
            left: 0;
            background: #FE8C12;
        }

        .blog__sidebar-item-search input {
            background: #ffff;
            width: 100%;
            height: 60px;
            padding: 0 15px;
            position: relative;
        }

        .blog__sidebar-item-search button {
            position: absolute;
            right: 45px;
            top: 40px;
            color: #ffff;
            width: 60px;
            height: 60px;
            line-height: 60px;
            background: #FE8C12;
            display: inline-block;
        }

        .blog__sidebar-item-widget-category ul li:last-child {
            margin: 0;
        }

        .blog__sidebar-item-widget-category ul li {
            margin-bottom: 15px;
        }

        .blog__sidebar-item-widget-category ul li a {
            display: inline-block;
            background: #ffff;
            width: 100%;
            height: 50px;
            line-height: 50px;
            padding-left: 15px;
            text-transform: uppercase;
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            color: #030A15;
            font-weight: 700;
            position: relative;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            left: 0;
        }

        .blog__sidebar-item-widget-category ul li a i::before {
            color: #FE8C12;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            opacity: 0;
            margin-right: -15px;
        }

        .blog__sidebar-item-widget-category ul li a:hover {
            color: #FE8C12;
        }

        .blog__sidebar-item-widget-category ul li a:hover i::before {
            margin-right: 7px;
            opacity: 1;
        }

        .blog__sidebar-item-post {
            border-bottom: 1px solid #E6E7E8;
        }

        .blog__sidebar-item-post-thumb {
            margin-right: 20px;
        }

        .blog__sidebar-item-post-thumb img {
            max-width: 90px;
        }

        .blog__sidebar-item-post-content h6 a {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .blog__sidebar-item-post-content h6 a:hover {
            color: #FE8C12;
        }

        .blog__sidebar-item-post-content span {
            font-size: 14px;
            line-height: 24px;
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Open Sans", sans-serif;
        }

        .blog__sidebar-item-post-content span i::before {
            color: #FE8C12;
            margin-right: 10px;
        }

        .blog__sidebar-item-widget-tag a:last-child {
            margin: 0;
        }

        .blog__sidebar-item-widget-tag a {
            display: inline-block;
            background: #ffff;
            color: #030A15;
            font-size: 14px;
            font-weight: 700;
            height: 45px;
            line-height: 45px;
            padding: 0 25px;
            text-transform: uppercase;
            font-family: "Open Sans", sans-serif;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .blog__sidebar-item-widget-tag a:hover {
            background-color: #FE8C12;
            color: #ffff;
        }

        @media (max-width: 1199px) {
            .blog__area-item-content {
                padding: 40px 25px;
            }

            .blog__area-item-content h3 {
                font-size: 18px;
                line-height: 28px;
            }

            .blog__area-item-content ul li {
                margin-right: 10px;
            }

            .blog__area-item-content ul li i::before {
                font-size: 16px;
                margin-right: 5px;
            }

            .blog__sidebar-item-widget-tag a {
                padding: 0 12px;
                margin-right: 5px;
            }
        }

        @media (max-width: 575px) {
            .blog__details-left-content h3 {
                font-size: 20px;
                line-height: 30px;
            }

            .blog__details-left-content-box {
                padding: 20px;
            }

            .blog__details-left-content-box h6 {
                font-size: 14px;
                line-height: 24px;
            }

            .blog__details-left-related {
                border-bottom: 1px solid #E6E7E8;
                padding-bottom: 30px;
            }

            .blog__details-left-related h6 {
                font-size: 13px;
                line-height: 24px;
                font-weight: 600;
            }

            .blog__details-left-related-tag a {
                font-size: 12px;
                font-weight: 600;
                padding: 0 14px;
                margin-right: 5px;
            }

            .blog__details-left-related-share ul li {
                display: inline-block;
                margin-right: 10px;
            }

            .blog__details-left-related-share ul li:last-child {
                margin: 0;
            }

            .blog__details-left-related-share ul li i::before {
                font-size: 15px;
            }

            .blog__details-left-comment-area-item {
                margin-left: 0;
                text-align: center;
            }

            .blog__details-left-comment-area-item-user {
                float: none;
                margin-left: 0;
            }

            .blog__details-left-comment-area-item-user img {
                max-width: 80px;
                height: auto;
                margin-bottom: 10px;
            }

            .blog__details-left-comment-area-item-details {
                padding: 0;
            }

            .blog__details-left-comment-area-item-details-name a {
                position: inherit;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .blog__standard-left-item-content {
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .blog__standard-left-item-content h3 {
                font-size: 19px;
                line-height: 29px;
            }

            .blog__standard-left-item-content-date {
                margin-bottom: 5px;
            }
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
