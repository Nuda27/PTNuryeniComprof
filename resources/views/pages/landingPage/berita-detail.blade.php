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
                <div class="blog__details-left">
                    <div class="blog__details-left-image">
                        <img src="{{ asset('assetsLanding/img/about-1.jpg') }}" alt="">
                    </div>
                    <div class="blog__details-left-content mb-40">
                        <ul>
                            <li class="mr-30">
                                <i class="fa fa-clock"></i>
                                22 Maret 2023
                            </li>
                        </ul>
                        <h3 class="mb-15">Make sure you have your business plan ready</h3>
                        <p class="mb-40">Aliquam vel sapien at risus bibendum tempor ut nec ligula. Vestibulum tortor tortor, ornare nec tincidunt vel, luctus ac nisi. Nam fringilla auctor erat. Pellentesque consectetur nisl a lobortis dapibus. Sed a diam at augue cursus tempor. Morbi euismod tristique lectus, ut finibus eros. Donec non purus sem. Mauris eget feugiat felis, nec egestas lacus. Donec lobortis finibus erat, id aliquet ante dapibus vitae. Proin elementum nisi metus, vitae fermentum lorem mollis eu.</p>
                        <p class="mb-20">Mauris aliquam ante id eros viverra, sed convallis metus accumsan. Donec condimentum enim vel tristique tincidunt. Nullam lacus lorem, ultricies at dictum at, malesuada ut dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                        <p>Donec scelerisque ex arcu. Cras commodo auctor tortor, quis euismod sapien tincidunt non. Pellentesque aliquam sem in tellus fringilla interdum. Integer nec ex magna. Ut urna urna, blandit quis mi ac, elementum molestie turpis. Integer mattis turpis id quam volutpat egestas. Nulla sagittis ligula a augue semper sagittis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar-item mb-30">
                        <h4 class="mb-4">Recent Post</h4>
                        <div class="blog__sidebar-item-post d-flex align-items-center pb-15 mb-3">
                            <div class="blog__sidebar-item-post-thumb mb-2">
                                <a href="blog-details.html">
                                    <img src="{{ asset('assetsLanding/img/placeholder.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog__sidebar-item-post-content">
                                <h6><a href="blog-details.html">Their business blog is full</a></h6>
                                <span><i class="flaticon-calendar-1"></i>22 Feb, 2022</span>
                            </div>
                        </div>
                        <div class="blog__sidebar-item-post d-flex align-items-center pb-15 mb-3">
                            <div class="blog__sidebar-item-post-thumb mb-2">
                                <a href="blog-details.html">
                                    <img src="{{ asset('assetsLanding/img/about-1.jpg') }}" alt="">
                                </a>

                            </div>
                            <div class="blog__sidebar-item-post-content">
                                <h6><a href="blog-details.html">Their business blog is full</a></h6>
                                <span><i class="flaticon-calendar-1"></i>19 Feb, 2022</span>
                            </div>
                        </div>

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
