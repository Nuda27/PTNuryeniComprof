<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile PT</h5>
            <div class="card-body">
                <form action="{{ route('admin.office-profile.update', $profile->id) }}" id="formAccountSettings"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                        <img src="{{ asset($profile->logo ? asset($profile->logo) : 'assetsLanding/img/placeholder.jpg') }}"
                            alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar"
                            style="object-fit: cover" />

                        <div class="button-wrapper">
                            <label class="form-label">Logo PT</label>
                            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror"
                                value="{{ old('logo') }}">
                            <p class="text-muted mb-0">Allowed png, jpg, png Max size of 2048K</p>
                            @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="firstName" class="form-label">Nama PT</label>
                            <input class="form-control  @error('name') is-invalid @enderror" type="text" id="firstName"
                                name="name" value="{{ old('name', $profile->name) }}" placeholder="Masukana nama PT"
                                autofocus />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control  @error('email') is-invalid @enderror" type="email" id="email"
                                name="email" value="{{ old('email', $profile->email) }}"
                                placeholder="Masukan email PT" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input class="form-control  @error('telepon') is-invalid @enderror" type="text" id="telepon"
                                name="telepon" value="{{ old('telepon', $profile->telepon) }}"
                                placeholder="Masukan Telepon" autofocus />
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="whatsapp" class="form-label">Whatsapp</label>
                            <input class="form-control @error('whatsapp') is-invalid @enderror" type="text"
                                id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $profile->whatsapp) }}"
                                placeholder="Masukan No WA" autofocus />
                            @error('whatsapp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input class="form-control @error('instagram') is-invalid @enderror" type="text"
                                id="instagram" name="instagram" value="{{ old('instagram', $profile->instagram) }}"
                                placeholder="Masukan link instagram" autofocus />
                            @error('instagram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input class="form-control @error('facebook') is-invalid @enderror" type="text"
                                id="facebook" name="facebook" value="{{ old('facebook', $profile->facebook) }}"
                                placeholder="Masukan link facebook" autofocus />
                            @error('facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input class="form-control @error('linkedin') is-invalid @enderror" type="text"
                                id="linkedin" name="linkedin" value="{{ old('linkedin', $profile->linkedin) }}"
                                placeholder="Masukan link Linkedin" autofocus />
                            @error('linkedin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input class="form-control @error('youtube') is-invalid @enderror" type="text" id="youtube"
                                name="youtube" value="{{ old('youtube', $profile->youtube) }}"
                                placeholder="Masukan link Youtube" autofocus />
                            @error('youtube')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="maps" class="form-label">Link Google Maps</label>
                            <input class="form-control @error('maps') is-invalid @enderror" type="text" id="maps"
                                name="maps" value="{{ old('maps', $profile->maps) }}"
                                placeholder="Contoh Link Maps : https://goo.gl/maps/TSFRY1FHQkHWhtoK9" autofocus />
                            @error('maps')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- START PENILAIAN --}}
                        <div class="mb-3 col-md-6">
                            <label for="pengalaman" class="form-label">Tahun Pengalaman</label>
                            <input class="form-control @error('pengalaman') is-invalid @enderror" type="text"
                                id="pengalaman" name="pengalaman" value="{{ old('pengalaman', $profile->pengalaman) }}"
                                placeholder="Masukan Berapa tahun pengalaman PT" autofocus />
                            @error('pengalaman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="penilaian" class="form-label">Total Penilaian Positif</label>
                            <input class="form-control @error('penilaian') is-invalid @enderror" type="text"
                                id="penilaian" name="penilaian" value="{{ old('penilaian', $profile->penilaian) }}"
                                placeholder="Masukan total penilaian" autofocus />
                            @error('penilaian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="proyek" class="form-label">Total Proyek Terselesaikan</label>
                            <input class="form-control @error('proyek') is-invalid @enderror" type="text" id="proyek"
                                name="proyek" value="{{ old('proyek', $profile->proyek) }}"
                                placeholder="Masukan total proyek selesai" autofocus />
                            @error('proyek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="anggota" class="form-label">Total Anggota/Karyawan</label>
                            <input class="form-control @error('anggota') is-invalid @enderror" type="text" id="anggota"
                                name="anggota" value="{{ old('anggota', $profile->anggota) }}"
                                placeholder="Masukan total Anggota" autofocus />
                            @error('anggota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- END PENILAIAN --}}

                        <div class="mb-3 col-md-6">
                            <label for="about" class="form-label">Tentang PT Singkat</label>
                            <textarea name="about" id="about" cols="0" rows="2"
                                class="form-control @error('about', $profile->about) is-invalid @enderror">{{ old('about', $profile->about) }}</textarea>
                            @error('about')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat PT</label>
                            <textarea name="alamat" id="alamat" cols="0" rows="2"
                                class="form-control @error('alamat', $profile->alamat) is-invalid @enderror">{{ old('alamat', $profile->alamat) }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>