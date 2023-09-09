@extends('layouts.layout_admin')

@section('title')
Edit WhyChoose
@endsection

@section('content')
<a href="{{ route('admin.whychoose.show', $whychoose->id) }}" type="button" class="btn btn-primary mb-3 ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Update WhyChoose</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="/admin/whychoose/{{ $whychoose->id }}/whyitem/{{ $whychooseDetail->id }}/update"
                    id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="row input">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Tittle</label>
                            <input class="form-control  @error('title') is-invalid @enderror" type="text" id="firstName"
                                name="title" value="{{ old('title', $whychooseDetail->title) }}" autofocus />
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" id="description"
                                name="description" value="{{ old('description') }}"
                                placeholder="">{{ old('description', $whychooseDetail->description) }}</textarea>
                            @error('description')
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
@endsection
