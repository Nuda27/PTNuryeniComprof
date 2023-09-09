@extends('layouts.layout_admin')

@section('title')
Detail WhyChoose
@endsection

@section('content')
<a href="{{ route('admin.whychoose.index') }}" type="button" class="btn btn-primary mb-3 ">
    Kembali
</a>

<div class="row">
    <div class="col-md-12">
        {{-- 1 --}}
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <h5><i class="fa fa-edit"></i> Detail Ujian</h5>
                <hr />
                <div class="table-responsive">
                    <table class="table table-bordered table-centered table-nowrap mb-0 rounded">
                        <tbody>
                            <tr>
                                <td style="width: 30%" class="fw-bold">
                                    Nama Ujian
                                </td>
                                <td>{{ $whychoose->title }}</td>
                            </tr>
                            <tr class="white-space">
                                <td class="fw-bold">Materi Ujian</td>
                                <td>{{ $whychoose->subtitle }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Gambar</td>
                                <td><img src=" {{ asset($whychoose->file)  }} " width="100px"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- 2 --}}
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5>
                    <i class="fa fa-question-circle"></i> Item Why Choose
                </h5>
                <hr />
                <a href="#" type="button" class="btn btn-primary mb-3 ">
                    <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah
                </a>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered data-table nowrap w-100">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($whychooseDetail as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection