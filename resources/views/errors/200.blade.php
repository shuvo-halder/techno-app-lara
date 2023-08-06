
@extends('FrontEndView.layouts.frontMaster')
@section('title','200 Ok ~ Techno Apogee Limited')


@section('content')



<div class="d-flex align-items-center justify-content-center vh-60 pt-5">
    <div class="text-center">
        <h1 class="display-1 fw-bold">200</h1>
        <p class="fs-3"> <span class="text-danger">Opps!</span> </p>
        <p class="lead">
            Standard response for successful HTTP requests.
          </p>
        <a href="{{ route('frontEndIndex') }}" class="btn btn-primary">Go Home</a>
    </div>
</div>
<div class="pt-5"></div>
@endsection