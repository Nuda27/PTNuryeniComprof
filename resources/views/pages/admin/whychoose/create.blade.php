@extends('layouts.layout_admin')

@section('title')
Create WhyChoose
@endsection

@section('content')
<a href="{{ route('admin.whychoose.index') }}" type="button" class="btn btn-primary mb-3 ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Create WhyChoose</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.whychoose.store') }}" id="formAccountSettings" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- Input data whey --}}
                    <div class="row mb-4">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Title</label>
                            <input class="form-control  @error('title2') is-invalid @enderror" type="text"
                                id="firstName" name="title2" value="{{ old('title2') }}" autofocus />
                            @error('title2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <textarea class="form-control  @error('subtitle') is-invalid @enderror" id="subtitle"
                                name="subtitle">{{ old('subtitle') }}</textarea>
                            @error('subtitle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="formFile" class="form-label @error('file') is-invalid @enderror">Upload
                                Foto</label>
                            <input class="form-control" type="file" id="formFile" name="file"
                                value="{{ old('file') }}" />
                            @error('file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <hr>
                    <h5 class="">Detail WhyChoose</h5>
                    {{-- Input data detail --}}
                    <div class="row input">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title[]" value="{{ old('title[]') }}" autofocus required />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description[]" value="{{ old('description[]') }}" placeholder=""
                                required></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-2">
                        <a class="btn btn-outline-primary add_field">Tambah Opsi</a>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).on('click', '.add_field', function() {
        $(`<br><div class="row input">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title[]" value="{{ old('title[]') }}" autofocus />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description[]" value="{{ old('description[]') }}" placeholder=""></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>`).insertAfter('.input:last');
    })
</script>
@endsection