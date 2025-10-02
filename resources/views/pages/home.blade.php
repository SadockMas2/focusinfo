@extends('layout.base')
@section('content')

    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!-- hero-slider-wrap     -->
            @include('layout.partials.slider')

            @if(isset($query) && $query)
                <div class="section-title sect_dec">
                    <h2>Résultats pour : "{{ $query }}"</h2>
                    @if(isset($category))
                        <h4>dans la catégorie : {{ $category->name }}</h4>
                    @endif
                </div>
            @endif

            @if($articles->isEmpty())
                <p>Aucun article trouvé pour cette recherche.</p>
            @endif

            <section>
                <div class="container">
                    <div class="section-title sect_dec">
                        <h2>Cette Semaine</h2>
                        <h4>le plus lues</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            @php

                                $mostViewedArticleThisWeekQuery = \App\Models\Article::published()
                                    ->where('published_at', '>=', now()->subWeek());

                                if(isset($category)) {
                                    $mostViewedArticleThisWeekQuery->where('category_id', $category->id);
                                }

                                $mostViewedArticleThisWeek = $mostViewedArticleThisWeekQuery
                                    ->orderBy('view_count', 'desc')
                                    ->first();

                            @endphp

                            @if ($mostViewedArticleThisWeek)
                                <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                    <!--list-post-->
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker" href="{{ route('blog_detail', $mostViewedArticleThisWeek->slug) }}">
                                            {{ $mostViewedArticleThisWeek->category->name ?? 'Uncategorized' }}
                                        </a>
                                        <div class="list-post-media">
                                            <a href="{{ route('blog_detail', $mostViewedArticleThisWeek->slug) }}">
                                                <div class="bg-wrap">
                                                    <div class="bg"
                                                        data-bg="{{ asset('storage/' . $mostViewedArticleThisWeek->featured_image) }}">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class="post-media_title">&copy;
                                                {{ $mostViewedArticleThisWeek->credit_photo }}</span>
                                        </div>
                                        <div class="list-post-content">
                                            <h3><a href="{{ route('blog_detail', $mostViewedArticleThisWeek->slug) }}">{{ $mostViewedArticleThisWeek->title }}</a></h3>
                                            <span class="post-date"><i class="far fa-clock"></i>
                                                {{ $mostViewedArticleThisWeek->published_at->format('d M Y') }}</span>
                                            {{-- <p>{{ $mostViewedArticleThisWeek->excerpt }}</p> --}}
                                            <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i>
                                                    {{ $mostViewedArticleThisWeek->comments->count() }} </li>
                                                <li><i class="fal fa-eye"></i> {{ $mostViewedArticleThisWeek->view_count }}
                                                </li>
                                            </ul>
                                            <div class="author-link">
                                                <a href="#">
                                                    <img src="{{ asset('storage/' . $mostViewedArticleThisWeek->author->avatar) }}"
                                                        alt="">
                                                    <span>By
                                                        {{ $mostViewedArticleThisWeek->author->name ?? 'Aucun Auteur' }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--list-post end-->
                                </div>
                                <a href="{{ route('blog') }}" class="dark-btn fl-wrap"> Lire plus </a>
                            @endif
                        </div>
                        <div class="col-md-7">
                            <div class="picker-wrap-container fl-wrap">
                                <div class="picker-wrap-controls">
                                    <ul class="fl-wrap">
                                        <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                        <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                        <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                    </ul>
                                </div>
                                <div class="picker-wrap fl-wrap">
                                    <div class="list-post-wrap fl-wrap">
                                        @php
                                           // Récupérer les articles populaires de la semaine, filtrés si une catégorie est sélectionnée
                                            $weeklyPopularArticlesQuery = \App\Models\Article::published()
                                                ->where('published_at', '>=', now()->subWeek());

                                            if(isset($category)) {
                                                $weeklyPopularArticlesQuery->where('category_id', $category->id);
                                            }

                                            $weeklyPopularArticles = $weeklyPopularArticlesQuery
                                                ->orderBy('view_count', 'desc')
                                                ->take(4)
                                                ->get();

                                        @endphp

                                        @if ($weeklyPopularArticles->isNotEmpty())
                                            @foreach ($weeklyPopularArticles as $index => $article)
                                                <!--list-post-->
                                                <div class="list-post fl-wrap">
                                                    <div class="list-post-media">
                                                        <a href="#">
                                                            <div class="bg-wrap">
                                                                <div class="bg"
                                                                    data-bg="{{ asset('storage/' . $article->featured_image) }}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <span class="post-media_title">&copy;
                                                            {{ $article->credit_photo }}</span>
                                                    </div>
                                                    <div class="list-post-content">
                                                        <a class="post-category-marker" href="#">
                                                            {{ $article->category->name ?? '' }}
                                                        </a>
                                                        <h3><a href="#">{{ $article->title }}</a></h3>
                                                        <span class="post-date"><i class="far fa-clock"></i>
                                                            {{ $article->published_at->format('d M Y') }}</span>
                                                        <p>{{ Str::limit($article->excerpt, 100) }}</p>
                                                        <ul class="post-opt">
                                                            <li><i class="far fa-comments-alt"></i>
                                                                {{ $article->comments->count() }} </li>
                                                            <li><i class="fal fa-eye"></i> {{ $article->view_count }} </li>
                                                        </ul>
                                                        <div class="author-link">
                                                            <a href="#">
                                                                <img src="{{ asset('storage/' . $article->author->avatar) }}"
                                                                    alt="">
                                                                <span>By
                                                                    {{ $article->author->name ?? 'Aucun Auteur' }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--list-post end-->
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="controls-limit fl-wrap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="limit-box"></div>
            </section>
            <!-- section end -->
            <!-- section -->

            {{-- @if(isset($category))
                <h2>Articles dans la catégorie : {{ $category->name }}</h2>
            @else
                <h2>Tous les articles</h2>
            @endif --}}




            <section class="no-padding">
                <div class="fs-carousel-wrap">
                    <div class="fs-carousel-wrap_title">
                        <div class="fs-carousel-wrap_title-wrap fl-wrap">
                            <h4>Actualités Récentes</h4>
                            <h5>À ne pas manquer et restez informé. Un sujet pour vous.</h5>
                        </div>
                        <div class="abs_bg"></div>
                        <div class="gs-controls">
                            <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                    </div>
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
                </div>
            </section>

            <!-- section end -->
            <!-- section  -->
        @endsection
