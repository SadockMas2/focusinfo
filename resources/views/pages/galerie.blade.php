@extends('layout.base')
@section('content')
@section('title', 'Galerie Photos')
@section('page_titlle', 'Galerie Photos')
@section('active_page', 'Galerie Photos')
@section('active_page_desc', 'Galerie Photos')
@include('layout.partials.banner')
<div style="height:100px"></div>
<!-- Sliding Image -->
<div class="sliding-img mb-3">
    <div class="sliding-img-frame-to-start" style="background-image: url(../assets/img/others/img1.png)"></div>
</div>
<!-- End Sliding Image -->

<!-- Sliding Image -->
<div class="sliding-img mb-3">
    <div class="sliding-img-frame-to-start-sm" style="background-image: url(../assets/img/others/img2.png)"></div>
</div>
<!-- End Sliding Image -->

@endsection
