
@extends('FrontEndView.layouts.frontMaster')
@section('title','419 page expried ~ Techno Apogee Limited')


@section('content')



<div class="d-flex align-items-center justify-content-center vh-60 pt-5">
    <div class="text-center">
        <h1 class="display-1 fw-bold">419</h1>
        <p class="fs-3"> <span class="text-danger">Opps!</span> PAGE EXPIRED.</p>
        <p class="lead">
            The page is expried. try reload or return back.
          </p>
        <a href="{{ redirect(url()->previous()) }}" class="btn btn-primary">Go Home</a>
    </div>
</div>
<div class="pt-5"></div>
@endsection