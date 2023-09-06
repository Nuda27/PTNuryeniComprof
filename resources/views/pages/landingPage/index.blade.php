@extends('layouts.layout_landing')

@section('title')
Nuryeni | Solution To All Your Problems
@endsection

@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assetsLanding/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Solusi Sewa
                                    Alat Berat</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Sewa Alat Berat Berkualitas
                                </h1>
                                <a href="{{ route('contact.index') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInRight">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assetsLanding/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Solusi Sewa
                                    Alat Berat</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Harga Sewa Alat Berat
                                    Lebih Murah</h1>
                                <a href="{{ route('contact.index') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInRight">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
@if($about)
<div class="container-xxl py-5 about" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="position-relative me-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid w-100 about-img"
                        src="{{ asset($about->file ? $about->file  : 'assetsLanding/img/service-2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-primary mb-2">About</p>
                <h1 class="display-5 mb-4">{{ $about->title }}</h1>
                <p class="mb-4">
                    {{ $about->description }}
                </p>
                <div class="row pt-2">
                    <div class="col-sm-7">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email</p>
                                <h6 class="mb-0">
                                    {{ $profile->email ? $profile->email : 'pt.nuryeni2018@gmail.com'}}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Telepon</p>
                                <h6 class="mb-0">
                                    {{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 p-5">
    <div class="row g-5">
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="text-center border p-5">
                <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                <span class="fs-5 fw-semi-bold text-white">Tahun Pengalaman</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="text-center border p-5">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">100</h1>
                <span class="fs-5 fw-semi-bold text-white">Anggota Tim</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="text-center border p-5">
                <i class="fa fa-users fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                <span class="fs-5 fw-semi-bold text-white">Penilaian Positif</span>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="text-center border p-5">
                <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                <span class="fs-5 fw-semi-bold text-white">Proyek Selesai</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative me-lg-4">
                    <img class="img-fluid w-100" src="{{ asset('assetsLanding/img/feature.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <p class="fw-medium text-uppercase text-primary mb-2">MENGAPA MEMILIH KAMI</p>
                <h1 class="display-5 mb-4">Beberapa Alasan Mengapa Orang Memilih Kami</h1>
                {{-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                    et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                </p> --}}
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Experienced Workers</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                    dolore erat amet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Reliable Industrial Services</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                    dolore erat amet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>24/7 Customer Support</h4>
                                <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                    dolore erat amet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h4>Customer Support</h4>
                                <span>Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                    dolore erat amet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
@if(count($services) > 0)
<div class="container-xxl py-5" id="service">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
            <h1 class="display-5 mb-4">Kami Memberikan Pelayanan Terbaik</h1>
        </div>
        <div class="row gy-5 gx-4">

            @foreach ($services as $service)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid service-img-cover"
                        src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                        alt="service">
                    <div class="service-img">
                        <img class="img-fluid"
                            src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                            alt="service">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">{{ $service->title }}</h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">{{$service->description}}</p>
                        </div>
                    </div>
                    {{-- <a class="btn btn-light" href="">Read More</a> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- Service End -->


<!-- Project Start -->
<div class="container-fluid bg-dark pt-5 my-5 px-0">
    <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
        <p class="fw-medium text-uppercase text-primary mb-2">PROYEK KAMI</p>
        <h1 class="display-5 text-white mb-5">Proyek Yang Kami Selesaikan</h1>
    </div>
    <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-1.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Auto Engineering</h5>
            </div>
        </a>
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-2.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Civil Engineering</h5>
            </div>
        </a>
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-3.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Gas Engineering</h5>
            </div>
        </a>
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-4.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Power Engineering</h5>
            </div>
        </a>
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-5.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Energy Engineering</h5>
            </div>
        </a>
        <a class="project-item" href="">
            <img class="img-fluid" src="assetsLanding/img/project-6.jpg" alt="">
            <div class="project-title">
                <h5 class="text-primary mb-0">Water Engineering</h5>
            </div>
        </a>
    </div>
</div>
<!-- Project End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
            <h1 class="display-5 mb-5">Apa Kata Mereka</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="assetsLanding/img/testimonial-1.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                        ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="assetsLanding/img/testimonial-2.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                        ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="assetsLanding/img/testimonial-3.jpg">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                        ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
