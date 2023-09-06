@extends('layouts.layout_admin')

@section('title')
Profile PT
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile PT</h4>


{{-- jika data ada berarti Update --}}
@if($profile)
@include('pages.admin.officeProfile.partials.edit')

{{-- Jika data tidak ada Create --}}
@else
@include('pages.admin.officeProfile.partials.create')

@endif


@endsection
