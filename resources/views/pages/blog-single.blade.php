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
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!--section   -->
            <section class="hero-section">
                <div class="bg-wrap hero-section_bg">
                    <div class="bg" data-bg="{{ asset('storage/' . $article->featured_image) }}"></div>
                </div>

                <div class="container">
                    <div class="hero-section_title hs_single-post">
                        <a class="post-category-marker color-bg" href="#">{{ $article->category->name ?? 'Technology' }}</a>
                        <span class="post-date"><i class="far fa-clock"></i>
                            {{ $article->created_at->format('d F Y') }}</span>
                        <div class="clearfix"></div>

                        {{-- <h2>{{ $article->title }}</h2> --}}

                        <h5>{{ $article->excerpt ?? 'Pas de description' }}</h5>
                        <div class="author-link">
                            <a href="#">
                                <img src="{{ asset('storage/' . $article->author->avatar) }}" alt="">
                                <span>By {{ $article->author->name ?? 'Auteur inconnu' }}</span>
                            </a>
                        </div>


                        <ul class="post-opt">
                            <li><i class="far fa-comments-alt"></i> {{ $article->comments->count() }} </li>
                            <li><i class="fal fa-eye"></i> {{ $article->views ?? 0 }} </li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                    <div class="scroll-down-wrap scw_transparent">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Faites défiler vers le bas pour découvrir</span>
                    </div>
                </div>
            </section>
            <!-- section end  -->
            <div class="breadcrumbs-section fl-wrap">
                <div class="container">
                    <div class="breadcrumbs-header_url">
                        <a href="\">Accueil</a><span>Style de liste de blogs</span>
                    </div>
                    <div class="share-holder hor-share">
                        <div class="share-title">Partagez:</div>
                        <div class="share-container  isShare"></div>
                    </div>
                </div>
                <div class="pwh_bg"></div>
            </div>
            <!--section   -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-container fl-wrap fix-container-init">
                                <div class="single-post-content  fl-wrap">
                                    <div class="fs-wrap smpar fl-wrap">
                                        <div class="fontSize"><span class="fs_title">Taille </span><input type="text"
                                                class="rage-slider" data-step="1" data-min="14" data-max="18" value="14">
                                        </div>
                                        <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                                        <div class="show-more-snopt-tooltip">
                                            <a href="#comments" class="custom-scroll-link"> <i
                                                    class="fas fa-comment-alt"></i> Commentez</a>
                                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Signaler </a>
                                        </div>
                                        <a class="print-btn" href="javascript:window.print()"
                                            data-microtip-position="bottom"><span>Imprimer</span><i
                                                class="fal fa-print"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="single-post-content_text" id="font_chage">
                                        {!! $article->content !!}
                                    </div>
                                    <div class="single-post-footer fl-wrap">
                                        <div class="post-single-tags">
                                            <span class="tags-title"><i class="fas fa-tag"></i> Mots-clés : </span>
                                            <div class="tags-widget">
                                                <a href="#">Science</a>
                                                <a href="#">Technologie</a>
                                                <a href="#">Business</a>
                                                <a href="#">style de vie</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <!-- single-post-nav"   -->
                                    
                                    @if(isset($prev) && $prev)
                                    <a href="{{ route('blog_detail', $prev->slug) }}" class="single-post-nav_prev spn_box">
                                        <div class="spn_box_img">
                                            <img src="{{ $article->featured_image ?? 'default-image.jpg' }}" alt="">

                                        </div>
                                        <div class="spn-box-content">
                                            <span class="spn-box-content_subtitle"><i class="fas fa-caret-left"></i> Article Précédent</span>
                                            <span class="spn-box-content_title">{{ $prev->title }}</span>
                                        </div>
                                    </a>
                                    @endif

                                    @if(isset($next) && $next)
                                    <a href="{{ route('blog_detail', $next->slug) }}" class="single-post-nav_next spn_box">
                                        <div class="spn_box_img">
                                          <img src="{{ $article->featured_image ?? 'default-image.jpg' }}" alt="">

                                        </div>
                                        <div class="spn-box-content">
                                            <span class="spn-box-content_subtitle">Article Suivant <i class="fas fa-caret-right"></i></span>
                                            <span class="spn-box-content_title">{{ $next->title }}</span>
                                        </div>
                                    </a>
                                    @endif


                                    <!-- single-post-nav"  end   -->
                                </div>
                                <br>
                                
                             
                                <h2 style="margin-bottom:20px; text-align: center; color:rgb(39, 10, 10); font-size:16px; font-family:'Times New Roman', Times, serif,bold ;"> ARTICLES CONNEXES</h2>
                                <div class="fs-carousel fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($articles as $article)
                                    <div class="swiper-slide">
                                        <div class="grid-post-item bold_gpi fl-wrap">
                                            <div class="grid-post-media gpm_sing">
                                                <div class="bg" data-bg="{{ asset('storage/' . $article->featured_image) }}"></div>
                                                <div class="author-link">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/' . $article->author->avatar) }}" alt="">
                                                        <span>By {{ $article->author->name ?? 'Auteur inconnu' }}</span>
                                                    </a>
                                                </div>
                                                <div class="grid-post-media_title">
                                                    <a class="post-category-marker" href="{{ route('blog.category', $article->category->id) }}">
                                                        {{ $article->category->name ?? 'Non catégorisé' }}
                                                    </a>
                                                    <h4>
                                                        <a href="{{ route('blog_detail', $article->slug) }}">
                                                            {{ $article->title }}
                                                        </a>
                                                    </h4>
                                                    <span class="video-date">
                                                        <i class="far fa-clock"></i> {{ $article->published_at->format('d M Y') }}
                                                    </span>
                                                    <ul class="post-opt">
                                                        <li><i class="far fa-comments-alt"></i> {{ $article->comments->count() }} </li>
                                                        <li><i class="fal fa-eye"></i> {{ $article->view_count }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                      
                       {{-- <!-- Formulaire pour ajouter un commentaire -->
<div id="addcom" class="clearafix">
    <div class="pr-subtitle">Commentez <i class="fas fa-caret-down"></i></div>
    <div class="comment-reply-form fl-wrap">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('comment.store', $article->id) }}" method="POST">
            @csrf
            <div class="row">
                @guest
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Your Name *" required>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Email Address *" required>
                </div>
                @endguest
            </div>
            <textarea name="content" placeholder="Your Comment:" required></textarea>
            <button class="btn float-btn color-btn">Submit Comment</button>
        </form>
    </div>
</div>

<!-- Liste des commentaires -->
<div class="pr-subtitle prs_big">Commentaires ({{ $article->comments->count() }})</div>
<ul class="commentlist clearafix">
    @forelse($article->comments as $comment)
        <li class="comment">
            <div class="comment-author">
                <img src="{{ asset('images/avatar/default.png') }}" width="50" height="50">
            </div>
            <div class="comment-body smpar">
                <h4>{{ $comment->name }}</h4>
                <p>{{ $comment->content }}</p>
                <div class="comment-meta">
                    <i class="far fa-clock"></i> {{ $comment->created_at->format('d M Y H:i') }}
                </div>
            </div>
        </li>
    @empty
        <li>Aucun commentaire pour l'instant.</li>
    @endforelse
</ul> --}}


                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- sidebar   -->
                            <div class="sidebar-content fl-wrap fixed-bar">
                                <!-- box-widget -->
                                 <div class="header-search-wrap novis_sarch">
                                    <div class="widget-inner">
                                        <form action="{{ route('blog.search') }}" method="GET">
                                            <input name="query" id="se" type="text" class="search" placeholder="Search..." value="{{ request('query') }}" />
                                            @if(isset($category))
                                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                            @endif
                                            <button type="submit" class="search-submit" id="submit_btn">
                                                <i class="fa fa-search transition"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                <!-- box-widget  end -->
            @foreach(\App\Models\Category::all() as $category)
                <a href="{{ route('category.articles', $category->id) }}" class="sb-categories_bg_item">
                    <div class="bg-wrap">
                        <div class="bg" data-bg="{{ asset($category->image ?? 'images/default.jpg') }}"></div>
                        <div class="overlay"></div>
                    </div>
                    <div class="spb-categories_title">
                        <span>{{ sprintf('%02d', $loop->iteration) }}</span>{{ $category->name }}
                    </div>
                    <div class="spb-categories_counter">{{ $category->articles()->count() }}</div>
                </a>
            @endforeach



{{--                               
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="single-grid-slider slider_widget">
                                            <div class="slider_widget_title">Editor's Choice</div>
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="grid-post-item     fl-wrap">
                                                            <div class="grid-post-media gpm_sing">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="images/all/21.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker"
                                                                        href="category.html">Technology</a>
                                                                    <h4><a href="post-single.html">Tesla it tested
                                                                            hypersonic Model-C</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i>16
                                                                        january 2022</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i> 11 </li>
                                                                        <li><i class="fal fa-eye"></i> 55 </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="grid-post-item  bold_gpi  fl-wrap">
                                                            <div class="grid-post-media gpm_sing">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="images/all/41.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker"
                                                                        href="category.html">Politics</a>
                                                                    <h4><a href="post-single.html">Blue Origin practices
                                                                            with orbital rocket in Florida</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i> 05
                                                                        december 2021</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i> 14 </li>
                                                                        <li><i class="fal fa-eye"></i> 134 </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="grid-post-item  bold_gpi  fl-wrap">
                                                            <div class="grid-post-media gpm_sing">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="images/all/22.jpg"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker"
                                                                        href="category.html">Technology</a>
                                                                    <h4><a href="post-single.html">Scientific research goes
                                                                            to the next level</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i> 03
                                                                        March 2022</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i> 25 </li>
                                                                        <li><i class="fal fa-eye"></i> 164 </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                </div>
                                                <div class="sgs-pagination sgs_hor "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                {{-- <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <!-- content-tabs-wrap -->
                                        <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                            <div class="content-tabs fl-wrap">
                                                <ul class="tabs-menu fl-wrap no-list-style">
                                                    <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                    <li><a href="#tab-resent">Resent News</a></li>
                                                </ul>
                                            </div>
                                            <!--tabs -->
                                            <div class="tabs-container">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-popular" class="tab-content first-tab">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">How to start Home
                                                                            education.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 25 may
                                                                                2022</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">The secret to moving this
                                                                            screening.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 13 april
                                                                                2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                6</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 1227</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Fall ability to keep
                                                                            Congress on rails.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 02 December
                                                                                2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab  end-->
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-resent" class="tab-content">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/5.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Magpie nesting zone
                                                                            sites.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 05 april
                                                                                2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                16</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/6.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Locals help create whole
                                                                            new community.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 22 march
                                                                                2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                31</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/7.jpg" alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Tennis season still to
                                                                            proceed.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 06 December
                                                                                2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                05</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab end-->
                                            </div>
                                            <!--tabs end-->
                                        </div>
                                        <!-- content-tabs-wrap end -->
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                            </div> --}}
                            <!-- sidebar  end -->
                        {{-- </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div> --}}
            </section>
            <!-- section end -->
            <!-- section  -->
            {{-- <div class="gray-bg ad-wrap fl-wrap">
                <div class="content-banner-wrap">
                    <img src="images/all/banner.jpg" class="respimg" alt="">
                </div>
            </div> --}}
            <!-- section end -->
        </div>
     
@endsection