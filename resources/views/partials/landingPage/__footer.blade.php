<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4"> {{ $profile->name ? $profile->name : 'PT. Nuryeni' }}</h5>
                <img src="{{ $profile->logo ? asset($profile->logo) : asset('logo/nyn.png') }}" alt="nyn" class="mb-2"
                    width="75">
                <p>
                    {{ $profile->about ? $profile->about : 'PT. Nuryeni adalah sebuah perusahaan yang bergerak dibidang
                    Waste (LB3) management mulai dari
                    penyewaan alat berat dll' }}
                </p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="/#about">About</a>
                <a class="btn btn-link" href="/#service">Services</a>
                <a class="btn btn-link" href="/contact">Contact</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Jam kerja</h5>
                <p class="mb-1">Senin - Jumat</p>
                <h6 class="text-light">09:00 - 16:00</h6>
                <p class="mb-1">Sabtu</p>
                <h6 class="text-light">09:00 - 12:00</h6>
                <p class="mb-1">Minggu</p>
                <h6 class="text-light">Tutup</h6>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Contact Details</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                    {{$profile->alamat ? $profile->alamat : 'Cilangkap, Kec. Babakancikao, Purwakarta' }}
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                    {{ $profile->telepon ? $profile->telepon : '(0264)88305518'}}
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $profile->email ? $profile->email : 'pt.nuryeni2018@gmail.com' }}
                </p>
                <div class="d-flex pt-3">
                    {{-- ig --}}
                    @if($profile->instagram)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->instagram }}"
                        target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    {{-- fb --}}
                    @if($profile->facebook)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->facebook }}"
                        target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif
                    {{-- yt --}}
                    @if($profile->youtube)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->youtube }}"
                        target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    @endif
                    {{-- linked --}}
                    @if($profile->linkedin)
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $profile->linkedin }}"
                        target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container text-center">
        <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Gen-Z Company</a>, All Right Reserved.
        </p>
    </div>
</div>
<!-- Copyright End -->
