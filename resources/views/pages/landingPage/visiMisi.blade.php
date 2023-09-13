@extends('layouts.layout_landing')

@section('title')
Nuryeni | Solution To All Your Problems
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Visi Misi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Visi Misi Start -->
@if($visiMisi)
<div class="container-xxl py-5">
    <div class="container">
        <div class="row gy-5 gx-4">

            {{-- VISI --}}
            <div class=" col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4 ">VISI</h1>
                <p class="mb-4">
                    {{ $visiMisi->visi }}
                </p>
            </div>

            {{-- MISI --}}
            <div class=" col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">MISI</h1>
                <p class="mb-4">
                    {{ $visiMisi->misi }}
                </p>
            </div>

        </div>
    </div>
</div>
@endif
<!-- Visi Misi End -->

@endsection
