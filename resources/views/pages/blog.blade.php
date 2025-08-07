@extends('layout.base')
@section('title', 'Articles')
@section('content')
    <div class="overflow-hidden">
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-1 content-space-b-lg-2">
            <div class="w-lg-50 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-5">
                    <h1 class="display-4">Nos Article</h1>
                    <p>Voici en articles nos dernières activités.</p>
                </div>
                <!-- End Heading -->

                <form method="GET" action="{{ route('blog') }}">
                    <div class="position-relative">
                        <!-- Input Card -->
                        <div class="input-card input-card-sm">
                            <div class="input-card-form">
                                <label for="searchForm" class="form-label visually-hidden">Chercher un Article</label>
                                <input type="text" class="form-control form-control-lg" id=""
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
            <a class="btn btn-white btn-sm m-1" href="{{ route('blog') }}">Toutes</a>

            @foreach ($categories as $category)
                <a class="btn btn-white btn-sm m-1"
                    href="{{ route('blog', ['categ' => $category->slug]) }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>

    @include('layout.partials.blog')

    {{-- @include('layout.partials.contact') --}}

@endsection
