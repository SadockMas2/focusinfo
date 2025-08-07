@extends('layout.base')
@section('title', $article->title)

<link rel="canonical" href="{{ $settings->site_url ?? url()->current() }}">
<meta name="robots" content="index, follow">
<link rel="icon" type="image/png" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
<link rel="apple-touch-icon" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">

<meta property="og:title" content="{{ $article->title }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($article->content), 150) }}">
<meta property="og:image" content="{{ asset('storage/' . $article->featured_image) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">
<meta property="og:site_name" content="{{ $settings->site_name ?? 'Soma Media Labs' }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $article->title }}">
<meta name="twitter:description" content="{{ Str::limit(strip_tags($article->content), 150) }}">
<meta name="twitter:image" content="{{ asset('storage/' . $article->featured_image) }}">
<meta name="twitter:site" content="@somamedialab">

@php
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url()->current(),
        ],
        'headline' => $article->title,
        'image' => [asset('storage/' . $article->featured_image)],
        'datePublished' => $article->created_at->toIso8601String(),
        'dateModified' => $article->updated_at->toIso8601String(),
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
        'description' => Str::limit(strip_tags($article->content), 150),
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
                    <!-- Media -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="avatar avatar-circle" src="{{ asset('storage/' . $article->author->avatar) }}"
                                alt="Image Description">
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">
                                <a class="link link-dark" href="#">{{ $article->author->name }}</a>
                            </h6>
                            <span class="d-block fs-5 text-muted">{{ $article->created_at->diffForHumans() }}</span>

                        </div>
                    </div>
                    <!-- End Media -->
                    <div class="mb-6">
                        <h1 class="h2">{{ $article->title }}</h1>
                    </div>
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-10">
                            <img class="img-fluid" src="{{ asset('storage/' . $article->featured_image) }}"
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
            {!! $article->content !!}
        </div>

    </div>
    <hr>

    <div class="container content-space-b-2 content-space-b-lg-3">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>Articles Similaires</h3>
        </div>
        <!-- End Heading -->

        <div class="row">

            @foreach ($articles as $article)
                <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100"
                        href="{{ route('blog_detail', $article->slug) }}">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="{{ asset('storage/' . $article->featured_image) }}"
                                style="height: 200px; object-fit: cover;" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>{{ Str::limit($article->title, 40, '...') }}</h4>
                            {{-- <p class="card-text">Create an immersive attendee experience with interactive programming for
                                both
                                digital and onsite audiences</p> --}}
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Lire plus</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            @endforeach

        </div>
        <!-- End Row -->
    </div>


    <!-- Comment -->
    <div class="container content-space-2 content-space-lg-3 d-none">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>3 comments</h3>
        </div>
        <!-- End Heading -->

        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <!-- Comment -->
                <ul class="list-comment">
                    <!-- Item -->
                    <li class="list-comment-item">
                        <!-- Media -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6>Dave Austin</h6>
                                    <span class="d-block small text-muted">1 day ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Media -->

                        <p>As a Special Education teacher this resonates so well with me. Fighting with gen ed teachers to
                            flatten for the students with learning disabilities. It also confirms some things for me in my
                            writing.</p>

                        <a class="link" href="#">Reply</a>

                        <!-- Comment -->
                        <ul class="list-comment">
                            <!-- Item -->
                            <li class="list-comment-item">
                                <!-- Media -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0">
                                        <img class="avatar avatar-circle" src="assets/img/160x160/img10.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>Louise Donadieu</h6>
                                            <span class="d-block small text-muted">1 day ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Media -->

                                <p>Love it Dave! We're all about keeping it up.</p>

                                <a class="link" href="#">Reply</a>
                            </li>
                            <!-- End Item -->
                        </ul>
                        <!-- End Comment -->
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="list-comment-item">
                        <!-- Media -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-circle" src="assets/img/160x160/img8.jpg"
                                    alt="Image Description">
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6>Hanna Wolfe</h6>
                                    <span class="d-block small text-muted">2 days ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Media -->

                        <p>Since our attention spans seem to be shrinking by the day — keeping it simple is more important
                            than ever.</p>

                        <a class="link" href="#">Reply</a>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End Comment -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Comment -->

    <div class="container">
        <!-- Titre -->
        <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>Laisser un commentaire</h3>
        </div>
        <!-- Fin Titre -->

        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <!-- Carte -->
                <div class="card card-lg card-bordered shadow-none">
                    <div class="card-body">
                        <form>
                            <div class="d-grid gap-4">
                                <!-- Formulaire -->
                                <div class="row">
                                    <div class="col-sm-6 mb-4 mb-sm-0">
                                        <label class="form-label" for="blogContactsFormFirstName">Prénom</label>
                                        <input type="text" class="form-control" name="blogContactsFirstName"
                                            id="blogContactsFormFirstName" placeholder="Prénom" aria-label="Prénom">
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="blogContactsFormLastName">Nom</label>
                                        <input type="text" class="form-control" name="blogContactsLastName"
                                            id="blogContactsFormLastName" placeholder="Nom" aria-label="Nom">
                                    </div>
                                </div>
                                <!-- Fin Formulaire -->

                                <!-- Formulaire -->
                                <span class="d-block">
                                    <label class="form-label" for="blogContactsFormEmail">Votre adresse e-mail</label>
                                    <input type="email" class="form-control" name="blogContactsEmailName"
                                        id="blogContactsFormEmail" placeholder="email@exemple.com"
                                        aria-label="email@exemple.com">
                                </span>
                                <!-- Fin Formulaire -->

                                <!-- Formulaire -->
                                <span class="d-block">
                                    <label class="form-label" for="blogContactsFormComment">Commentaire</label>
                                    <textarea class="form-control" id="blogContactsFormComment" name="blogContactsCommentName"
                                        placeholder="Laissez votre commentaire ici..." aria-label="Laissez votre commentaire ici..." rows="5"></textarea>
                                </span>
                                <!-- Fin Formulaire -->

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Fin Carte -->
            </div>
            <!-- Fin Col -->
        </div>
        <!-- Fin Row -->
    </div>

    <div style="height:100px"></div>

    @include('layout.partials.newsletter')


@endsection
