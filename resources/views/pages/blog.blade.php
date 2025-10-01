@extends('layout.base')
@section('title', 'Articles')
@section('content')
    <!-- content    -->

    {{-- <div id="wrapper">
        <!-- content    --> --}}
        <div id="wrapper">
            <div class="content">
            <div id="wrapper">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-container fl-wrap fix-container-init">
                                <div class="section-title">
                                    <h3>Trier par :</h3>
                                    <div class="steader_opt steader_opt_abs">
                                        <select name="filter" id="list" data-placeholder="Options"
                                            class="style-select no-search-select">
                                            <option>Plus récents</option>
                                            <option>Plus lus</option>
                                            <option>Plus vus</option>
                                            <option>Plus commentés</option>
                                        </select>
                                    </div>
                                </div>
                                <!--grid-post-wrap-->
                                <div class="grid-post-wrap">
                                    <div class="row">
                                        @php
                                            // Récupérer les articles avec pagination
                                            $articles = \App\Models\Article::published()
                                                ->with(['category', 'author', 'comments'])
                                                ->orderBy('published_at', 'desc')
                                                ->paginate(8);
                                        @endphp

                                        @foreach ($articles as $article)
                                            <!--grid-post-item-->
                                            <div class="col-md-6">
                                                <div class="grid-post-item bold_gpi fl-wrap">
                                                    <div class="grid-post-media">
                                                        <a href="{{ route('blog_detail', $article->slug) }}"
                                                            class="gpm_link">
                                                            <div class="bg-wrap">
                                                                <div class="bg"
                                                                    data-bg="{{ asset('storage/' . $article->featured_image) }}"
                                                                    style="background-image: url('{{ asset('storage/' . $article->featured_image) }}');">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <span class="post-media_title">© Droits d'image réservés</span>
                                                    </div>
                                                    <a class="post-category-marker purp-bg"
                                                        href="{{ route('categories.show', $article->category->slug) }}">
                                                        {{ $article->category->name }}
                                                    </a>
                                                    <div class="grid-post-content">
                                                        <h3><a
                                                                href="{{ route('blog_detail', $article->slug) }}">{{ $article->title }}</a>
                                                        </h3>
                                                        <span class="post-date"><i class="far fa-clock"></i>
                                                            {{ $article->published_at->format('d M Y') }}</span>
                                                        <p>{{ Str::limit($article->excerpt, 120) }}
                                                        <div class="hidden"></div>
                                                        </p>
                                                    </div>
                                                    <div class="grid-post-footer">
                                                        <div class="author-link">
                                                            <a href="{{ route('authors.show', $article->author->id) }}">
                                                                <img src="{{ asset('storage/' . $article->author->avatar) }}"
                                                                    alt="">
                                                                <span>Par {{ $article->author->name }}</span>
                                                            </a>
                                                        </div>
                                                        <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i>
                                                                {{ $article->comments->count() }} </li>
                                                            <li><i class="fal fa-eye"></i> {{ $article->view_count }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--grid-post-item end-->
                                        @endforeach
                                    </div>
                                </div>
                                <!--grid-post-wrap end-->
                                <div class="clearfix"></div>

                                <!-- Pagination -->
                                @if ($articles->hasPages())
                                    <div class="pagination">
                                        {{-- Previous Page Link --}}
                                        @if ($articles->onFirstPage())
                                            <span class="prevposts-link disabled"><i class="fas fa-caret-left"></i></span>
                                        @else
                                            <a href="{{ $articles->previousPageUrl() }}" class="prevposts-link"><i
                                                    class="fas fa-caret-left"></i></a>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                                            @if ($page == $articles->currentPage())
                                                <a href="#" class="current-page">{{ sprintf('%02d', $page) }}.</a>
                                            @else
                                                <a href="{{ $url }}">{{ sprintf('%02d', $page) }}.</a>
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($articles->hasMorePages())
                                            <a href="{{ $articles->nextPageUrl() }}" class="nextposts-link"><i
                                                    class="fas fa-caret-right"></i></a>
                                        @else
                                            <span class="nextposts-link disabled"><i class="fas fa-caret-right"></i></span>
                                        @endif
                                    </div>
                                @endif
                                <!--pagination end-->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- sidebar   -->
                            <div class="sidebar-content fl-wrap fixed-bar">
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="search-widget fl-wrap">
                                            <form action="{{ route('articles.search') }}" method="GET">
                                                <input name="q" type="text" class="search"
                                                    placeholder="Rechercher..." value="{{ request('q') }}" />
                                                <button class="search-submit2" type="submit"><i
                                                        class="far fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg" data-bg="images/bg/7.jpg"></div>
                                            </div>
                                            <div class="banner-widget_content">
                                                <h5>Visitez notre boutique en ligne de produits dérivés.</h5>
                                                <a href="#" class="btn float-btn color-bg small-btn">Notre
                                                    boutique</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Catégories</div>
                                    <div class="box-widget-content">
                                        @php
                                            $categories = \App\Models\Category::withCount([
                                                'articles' => function ($query) {
                                                    $query->published();
                                                },
                                            ])
                                                ->orderBy('articles_count', 'desc')
                                                ->get();
                                        @endphp
                                        <ul class="cat-wid-list">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a
                                                        href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
                                                    <span>{{ $category->articles_count }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Tags Populaires</div>
                                    <div class="box-widget-content">
                                        <div class="tags-widget">
                                            @php
                                                $popularTags = [
                                                    'Actualité',
                                                    'Politique',
                                                    'Technologie',
                                                    'Économie',
                                                    'Sports',
                                                    'Santé',
                                                    'Culture',
                                                    'International',
                                                ];
                                            @endphp
                                            @foreach ($popularTags as $tag)
                                                <a href="#">{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Suivez-nous</div>
                                    <div class="box-widget-content">
                                        <div class="social-widget">
                                            <a href="#" target="_blank" class="facebook-soc">
                                                <i class="fab fa-facebook-f"></i>
                                                <span class="soc-widget-title">J'aime</span>
                                                <span class="soc-widget_counter">2640</span>
                                            </a>
                                            <a href="#" target="_blank" class="twitter-soc">
                                                <i class="fab fa-twitter"></i>
                                                <span class="soc-widget-title">Abonnés</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                            <a href="#" target="_blank" class="youtube-soc">
                                                <i class="fab fa-youtube"></i>
                                                <span class="soc-widget-title">Abonnés</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                            <a href="#" target="_blank" class="instagram-soc">
                                                <i class="fab fa-instagram"></i>
                                                <span class="soc-widget-title">Abonnés</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <!-- content-tabs-wrap -->
                                        <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                            <div class="content-tabs fl-wrap">
                                                <ul class="tabs-menu fl-wrap no-list-style">
                                                    <li class="current"><a href="#tab-popular"> Articles Populaires
                                                        </a>
                                                    </li>
                                                    <li><a href="#tab-resent">Articles Récents</a></li>
                                                </ul>
                                            </div>
                                            <!--tabs -->
                                            <div class="tabs-container">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-popular" class="tab-content first-tab">
                                                        <div class="post-widget-container fl-wrap">
                                                            @php
                                                                $popularArticles = \App\Models\Article::published()
                                                                    ->with(['author', 'comments'])
                                                                    ->orderBy('view_count', 'desc')
                                                                    ->take(3)
                                                                    ->get();
                                                            @endphp

                                                            @foreach ($popularArticles as $article)
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a
                                                                            href="{{ route('blog_detail', $article->slug) }}">
                                                                            <img src="{{ asset('storage/' . $article->featured_image) }}"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a
                                                                                href="{{ route('blog_detail', $article->slug) }}">{{ Str::limit($article->title, 50) }}</a>
                                                                        </h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i>
                                                                                    {{ $article->published_at->format('d M Y') }}</span>
                                                                            </li>
                                                                            <li><span><i class="far fa-comments-alt"></i>
                                                                                    {{ $article->comments->count() }}</span>
                                                                            </li>
                                                                            <li><span><i class="fal fa-eye"></i>
                                                                                    {{ $article->view_count }}</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab  end-->
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-resent" class="tab-content">
                                                        <div class="post-widget-container fl-wrap">
                                                            @php
                                                                $recentArticles = \App\Models\Article::published()
                                                                    ->with(['author', 'comments'])
                                                                    ->orderBy('published_at', 'desc')
                                                                    ->take(3)
                                                                    ->get();
                                                            @endphp

                                                            @foreach ($recentArticles as $article)
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a
                                                                            href="{{ route('blog_detail', $article->slug) }}">
                                                                            <img src="{{ asset('storage/' . $article->featured_image) }}"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a
                                                                                href="{{ route('blog_detail', $article->slug) }}">{{ Str::limit($article->title, 50) }}</a>
                                                                        </h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i>
                                                                                    {{ $article->published_at->format('d M Y') }}</span>
                                                                            </li>
                                                                            <li><span><i class="far fa-comments-alt"></i>
                                                                                    {{ $article->comments->count() }}</span>
                                                                            </li>
                                                                            <li><span><i class="fal fa-eye"></i>
                                                                                    {{ $article->view_count }}</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                            @endforeach
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
                            </div>
                            <!-- sidebar  end -->
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
            </section>
            <!-- section  -->
            <div class="gray-bg ad-wrap fl-wrap">
                <div class="content-banner-wrap">
                    <img src="images/all/banner.jpg" class="respimg" alt="Publicité">
                </div>
            </div>
            <!-- section end -->
        </div>
    </div>
@endsection
