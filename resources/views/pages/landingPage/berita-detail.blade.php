@extends('layouts.layout_landing')

@section('title')
Nuryeni | Solution To All Your Problems
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Detail Berita</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Details Area Start -->
<div class="container-xxl blog__details section-padding mb-5">

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 lg-mb-30">

                @if($berita)
                <div class="blog__details-left">
                    <div class="blog__details-left-image">
                        <img src="{{ $berita->file ? asset($berita->file) : asset('assetsLanding/img/placeholder.jpg') }}" alt="">
                    </div>
                    <div class="blog__details-left-content mb-40">
                        <ul>
                            <li class="mr-30">
                                <i class="fa fa-clock"></i>
                                {{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}
                            </li>
                        </ul>
                        <h3 class="mb-15">{{ $berita->title }}</h3>
                        <p class="mb-40">
                            {{ $berita->description }}
                        </p>
                    </div>
                </div>
                @else
                <div class="alert alert-danger">
                    Data tidak ada
                </div>
                @endif

            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar-item mb-30">
                        <h4 class="mb-4">Postingan Terbaru</h4>
                        @if(count($terbaru))

                        @foreach ($terbaru as $data)
                        <div class="blog__sidebar-item-post d-flex align-items-center pb-15 mb-3">
                            <div class="blog__sidebar-item-post-thumb mb-2">
                                <a href="/berita/{{ $data->id }}">
                                    <img src="{{ asset('assetsLanding/img/placeholder.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__sidebar-item-post-content">
                                <h6>
                                    <a href="/berita/{{ $data->id }}">
                                        {{ \Illuminate\Support\Str::limit($data->title, 42) }}</a>
                                </h6>
                                <span><i class="flaticon-calendar-1"></i>
                                    {{ \Carbon\Carbon::parse($data->created_at)->format('d F Y') }}
                                </span>
                            </div>
                        </div>
                        @endforeach

                        @else
                        <div class="alert alert-danger">
                            Data tidak ada
                        </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Area End -->

<!-- Blog Area End -->




@endsection


<style>


</style>
