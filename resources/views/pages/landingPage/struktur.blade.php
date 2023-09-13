@extends('layouts.layout_landing')

@section('title')
Nuryeni | Solution To All Your Problems
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Struktur Organisasi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Struktur Start -->
@if($struktur)
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p> --}}
            <h1 class="display-5 mb-4">Struktur Organisasi</h1>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ $struktur->file ? asset($struktur->file) : asset('assetsLanding/img/placeholder.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endif

<!-- Struktur End -->



@endsection
