@extends('layouts.layout_admin')

@section('title')
Create Visi Misi
@endsection

@section('content')
<a href="{{ route('admin.visimisi.index') }}" type="button" class="btn btn-primary mb-3 ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Create Visi Misi</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.visimisi.store') }}" id="formAccountSettings" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Visi</label>
                            <textarea class="form-control  @error('visi') is-invalid @enderror" id="visi"
                                name="visi" value="{{ old('visi') }}" placeholder=""></textarea>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Misi</label>
                            <textarea class="form-control  @error('misi') is-invalid @enderror" id="misi"
                                name="misi" value="{{ old('misi') }}" placeholder=""></textarea>
                            @error('misi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection
