@extends('layout.base')
@section('title', $domaine->name)

<link rel="canonical" href="{{ $settings->site_url ?? url()->current() }}">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
<link rel="apple-touch-icon" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">

<meta property="og:title" content="{{ $domaine->name }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($domaine->description), 150) }}">
<meta property="og:image" content="{{ asset('storage/' . $domaine->image) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="domaine">
<meta property="og:site_name" content="{{ $settings->site_name ?? 'Soma Media Labs' }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $domaine->name }}">
<meta name="twitter:description" content="{{ Str::limit(strip_tags($domaine->description), 150) }}">
<meta name="twitter:image" content="{{ asset('storage/' . $domaine->image) }}">
<meta name="twitter:site" content="@somamedialab">

@php
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'domaine',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url()->current(),
        ],
        'headline' => $domaine->name,
        'image' => [asset('storage/' . $domaine->image)],
        'datePublished' => $domaine->created_at->toIso8601String(),
        'dateModified' => $domaine->updated_at->toIso8601String(),
        'author' => [
            '@type' => 'Organization',
            'name' => $settings->site_name ?? config('app.name'),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => $settings->site_name ?? config('app.name'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('storage/' . ($settings->logo ?? 'logo.png')),
            ],
        ],
        'description' => Str::limit(strip_tags($domaine->description), 150),
    ];
@endphp

<script type="application/ld+json">
    {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>


@section('content')

{{-- <div style="height:50px"></div> --}}
    <div class="bg-gradient-to-bottom-sm-light m-2" style="padding-top:30px">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                  
                    <div class="mb-6">
                        <h1 class="h2">{{ $domaine->name }}</h1>
                    </div>
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-10">
                            <img class="img-fluid" src="{{ asset('storage/' . $domaine->image) }}"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            {!! $domaine->long_desc !!}
        </div>

    </div>
    <hr>



    <div style="height:100px"></div>

    @include('layout.partials.newsletter')


@endsection
