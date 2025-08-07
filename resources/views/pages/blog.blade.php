@extends('layout.base')
@section('title', 'Articles')
@section('content')
    <div class="overflow-hidden">
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-1 content-space-b-lg-2">
            <div class="w-lg-50 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-5">
                    <h1 class="display-4">Insights</h1>
                    <p>Stay in the know with insights from industry experts.</p>
                </div>
                <!-- End Heading -->

                <form>
                    <div class="position-relative">
                        <!-- Input Card -->
                        <div class="input-card input-card-sm">
                            <div class="input-card-form">
                                <label for="searchForm" class="form-label visually-hidden">Search article</label>
                                <input type="text" class="form-control form-control-lg" id="searchForm"
                                    placeholder="Search article" aria-label="Search article">
                            </div>
                            <button type="button" class="btn btn-primary btn-lg"><i class="bi-search"></i></button>
                        </div>
                        <!-- End Input Card -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute top-0 end-0 d-none d-sm-block zi-n1 mt-n7 me-n10"
                            style="width: 4rem;">
                            <img class="img-fluid" src="assets/svg/components/pointer-up.svg" alt="Image Description">
                        </figure>
                        <!-- End SVG Shape -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute bottom-0 start-0 zi-n1 mb-n7"
                            style="width: 12rem; margin-left: -10rem;">
                            <img class="img-fluid" src="assets/svg/components/curved-shape.svg" alt="Image Description">
                        </figure>
                        <!-- End SVG Shape -->
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-white btn-sm m-1" href="blogs.html">Tout</a>
            <a class="btn btn-white btn-sm m-1" href="blogs-1.html?categ=education-environnementale&amp;id=12">Éducation
                Environnementale</a>
            <a class="btn btn-white btn-sm m-1" href="blogs-2.html?categ=communication-et-medias&amp;id=6">Communication
                et Médias</a>
            <a class="btn btn-white btn-sm m-1" href="blogs-3.html?categ=elevage&amp;id=7">Élevage</a>
            <a class="btn btn-white btn-sm m-1" href="blogs-4.html?categ=agriculture&amp;id=5">Agriculture</a>
            <a class="btn btn-white btn-sm m-1" href="blogs-5.html?categ=peche&amp;id=8">Pêche</a>
        </div>
    </div>

   @include('layout.partials.blog')

    {{-- @include('layout.partials.contact') --}}

@endsection
