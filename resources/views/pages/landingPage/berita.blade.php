@extends('layouts.layout_landing')

@section('title')
Nuryeni | Solution To All Your Problems
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Berita Terbaru</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita Terbaru</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Area Start -->
<div class="container-xxl blog__area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 mb-4">
                <div class="blog__area-item wow fadeInUp" data-wow-delay="0.8s">
                    <div class="blog__area-item-image">
                        <img src="{{ asset('assetsLanding/img/about-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="blog__area-item-content pt-0">
                        <div class="blog__area-item-content-date">
                            <span><i class="flaticon-calendar"></i>19 Feb, 2022</span>
                        </div>
                        <h3><a href="#">Business Liability Insurance Providers</a></h3>
                        <ul>
                        </ul>
                        <div class="blog__area-item-content-btn">
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Blog Area End -->




@endsection


<style>


</style>
