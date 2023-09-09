@extends('layouts.layout_admin')

@section('title')
Edit client
@endsection

@section('content')
<a href="{{ route('admin.client.index') }}" type="button" class="btn btn-primary mb-3 ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Edit client</h5>

            <hr class="my-0" />
            <div class="card-body">
                <form action="{{ route('admin.client.update', $client->id) }}" id="formAccountSettings" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="formFile" class="form-label @error('file') is-invalid @enderror">Upload
                                Foto</label>
                            <input class="form-control" type="file" id="formFile" name="file" value="{{ old('file') }}" />
                            @error('file')
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
