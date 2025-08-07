@extends('layout.base')
@section('title', $article->title)
@section('content')










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



    {{-- <section class="breadcrumb-section bg-cream">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrumb-content"
                        style="background-image: url({{ asset('assets/img/bg/breadcrumb-bg.webp') }})">
                        <div class="breadcrumb-nav" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <ul>
                                <li>
                                    <a href="index.htm">Home</a>
                                </li>
                                <li>
                                    <a href="#">Blog Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="breadcrumb-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>Blog Details</h2>
                        </div>
                        <div class="shape-1">
                            <img alt="shape" src="{{ asset('assets/img/shapes/shape-1.webp') }}" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                    <div class="breadcrumb-thumb">
                        <img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-1.webp') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- breadcrumb-section end -->

    <!-- services-details-section start -->
    <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-layout-wrap">
                        <div class="details-content" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <div class="blog-card-5 m-b-40">
                                <div class="thumb">
                                    <a href="#"><img alt="thumb-1"
                                            src="{{ asset('storage/' . $article->featured_image) }}" /></a>
                                </div>
                                <div class="content">
                                    <div class="blog-info">
                                        <div class="publisher-info">
                                            <img alt="thumb" src="{{ asset('storage/'.$settings->logo) }}" />
                                            <p>{{ config('app.name') }}</p>
                                        </div>
                                        <div class="date">
                                            <i class="fa-light fa-calendar-days"></i>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <div class="comment">
                                            <i class="fa-light fa-comments"></i>
                                            <p>{{ $article->comments->count() }} Comments</p>
                                        </div>
                                        <div class="view">
                                            <i class="fa-light fa-eye"></i>
                                            <p>{{ $article->view_count }} lectures</p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="#">{{ $article->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="text">

                                        {!! $article->content !!}

                                    </div>
                                </div>
                            </div>





                            <div class="divider-2"></div>
                            <div class="blog-tags d-none">
                                <div class="tag-wrap">
                                    <p>Tags:</p>
                                    <div class="tags">
                                        <button>Forest</button>
                                        <button>Pollution</button>
                                        <button>Plantation</button>
                                    </div>
                                </div>
                                <div class="socials">
                                    <div class="social-links">
                                        <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a>
                                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                                        <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-section d-none">
                                <div class="comments m-b-50">
                                    <div class="details-title m-b-50">
                                        <h2>Comments (02)</h2>
                                    </div>
                                    <div class="comment-wrap m-b-40">
                                        <div class="thumb">
                                            <img alt="thumb" src="{{asset('assets/img/thumbs/thumb-125.webp')}}" />
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <p>Abraham John</p>
                                            </div>
                                            <div class="date">
                                                <p>February 03, 2024</p>
                                            </div>
                                            <div class="text">
                                                <p>
                                                    Readable and Packages editors now use Lorem Ipsum
                                                    as their default model textlayout. The point
                                                    forusing the some !! ❤️
                                                </p>
                                            </div>
                                            <a class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="leave-comment m-b-60">
                                    <div class="details-title m-b-30">
                                        <h2>Leave a Comment</h2>
                                    </div>
                                    <form action="#">
                                        <div class="info-input m-b-20">
                                            <input class="form-control" id="exampleFormControlInput1"
                                                placeholder="Jhon Abraham" type="text" />
                                            <input class="form-control" id="exampleFormControlInput2"
                                                placeholder="Email Address" type="email" />
                                        </div>
                                        <div class="m-b-20">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Say Something..." rows="4"></textarea>
                                        </div>
                                        <button class="e-primary-btn has-icon" type="submit">
                                            Send Message
                                            <span class="icon-wrap"><span class="icon"><i
                                                        class="fa-regular fa-arrow-right"></i>
                                                    <i class="fa-regular fa-arrow-right"></i></span></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                            <div class="detail-sidebar-inner">
                                <div class="s-widget-wrap m-b-30">
                                    <div class="w-title">
                                        <h3>Recherche</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="search-bar">
                                        <input placeholder="Chercher.." type="text" />
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>

                                </div>
                                <div class="s-widget-wrap m-b-30">
                                    <div class="w-title">
                                        <h3>Articles Similaires</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="recent-campaigns">
                                        @foreach ($articles as $art)
                                            <div class="campaign">
                                                <div class="thumb">
                                                    <img alt="thumb" style="height:80px; width: 80px;"
                                                        src="{{ asset('storage/' . $art->featured_image) }}" />
                                                </div>
                                                <div>
                                                    <div class="date">
                                                        <p>{{ $art->created_at }}</p>
                                                    </div>
                                                    <div class="name">
                                                        <h5>
                                                            {{ Str::limit($art->title, 50, '...') }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                               
                                <div class="s-widget-wrap">
                                    <div class="w-title">
                                        <h3>Share With Everyone</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="socials">
                                        <div class="social-links">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                                target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}"
                                                target="_blank">
                                                <i class="fab fa-x-twitter"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($article->title) }}"
                                                target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                            <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}"
                                                target="_blank">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>


@endsection
