@extends('layouts.layout_admin')

@section('title')
Update Profile
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Update Profile</h4>


<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    {{-- <img src="{{ asset('assetsAdmin/img/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                    <div class="button-wrapper">
                        <input type="file" name="" id="" class="form-control">
                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                    </div> --}}
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('profile.update') }}" id="formAccountSettings" method="POST">
                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama</label>
                            <input class="form-control  @error('name') is-invalid @enderror" type="text" id="firstName" name="name" value="{{ old('name', $user->name) }}" autofocus />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control  @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>

        <div class="card mb-4">
            <h5 class="card-header">Update Password</h5>
            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Password Lama</label>
                            <input class="form-control  @error('current_password') is-invalid @enderror" type="password" name="current_password" />
                            @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Password Baru</label>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" />
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation" />

                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                    </div>
                </form>

            </div>
        </div>



        {{-- <div class="card">
            <h5 class="card-header">Delete Account</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Apakah Anda yakin ingin menghapus akun Anda?</h6>
                        <p class="mb-0">Setelah Anda menghapus akun Anda, tidak akan bisa di akses kembali</p>
                    </div>
                </div>
                <form id="formAccountDeactivation">
                    <button type="submit" class="btn btn-danger deactivate-account">Delete Account</button>
                </form>
            </div>
        </div>
        --}}
    </div>
</div>


@endsection
