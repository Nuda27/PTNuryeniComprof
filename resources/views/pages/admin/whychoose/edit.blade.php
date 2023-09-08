@extends('layouts.layout_admin')

@section('title')
Edit WhyChoose
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
                <form action="{{ route('admin.whychoose.update', $whychoose->id) }}" id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @foreach ($data as $x)
                    <div class="row">
                        <input type="hidden" name="id[]" value="{{$x->id}}">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title[]" value="{{ old('title[]', $x->title ) }}" autofocus />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description[]" value="{{ old('description[]' ) }}" placeholder="">{{ $x->description }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    @endforeach

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection
