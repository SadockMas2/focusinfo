@include('layout.includes.head')

<div class="hero-slider-wrap fl-wrap">
    <!-- hero-slider-container     -->
    <div class="hero-slider-container multi-slider fl-wrap full-height">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div class="bg-wrap">
                            <div class="bg" data-bg="{{ 'storage/' . $slide->featured_image }}"
                                data-swiper-parallax="40%"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="hero-item fl-wrap">
                            <div class="container">
                                <a class="post-category-marker" href="category.html">{{ $slide?->category?->name }}</a>
                                <div class="clearfix"></div>
                                <h2><a
                                        href="{{ route('blog_detail', $slide->slug) }}">{{ Str::limit($slide->title, 60, '...') }}</a>
                                </h2>
                                {{-- <h4>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet,
                                    consectetur Nulla fringilla purus at leo dignissim congue. </h4> --}}
                                <div class="clearfix"></div>
                                <div class="author-link"><a href="author-single.html"><img
                                            src="{{ asset('storage/' . $slide->author->avatar) }}" alt="">
                                        <span>{{ $slide->author->name }}</span></a></div>
                                <span class="post-date"><i class="far fa-clock"></i> {{ $slide->created_at }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i></div>
        <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i></div>
    </div>
    <!-- hero-slider-container  end   -->
    <!-- hero-slider_controls-wrap   -->
    <div class="hero-slider_controls-wrap">
        <div class="container">
            <div class="hero-slider_controls-list multi-slider_control">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- swiper-slide  -->

                        @foreach ($slides as $slide)
                            <div class="swiper-slide">
                                <div class="hsc-list_item fl-wrap">
                                    <div class="hsc-list_item-media">
                                        <div class="bg-wrap">
                                            <div class="bg" data-bg="{{ 'storage/' . $slide->featured_image }}"></div>
                                        </div>
                                    </div>
                                    <div class="hsc-list_item-content fl-wrap">
                                        <h4>{{ Str::limit($slide->title, 60, '...') }} </h4>
                                        <span class="post-date"><i class="far fa-clock"></i>
                                            {{ date('d/m/y', strtotime($slide->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="multi-pag"></div>
        </div>
    </div>
    <!-- hero-slider_controls-wrap end  -->
    <div class="slider-progress-bar act-slider">
        <span>
            <svg class="circ" width="30" height="30">
                <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)"
                    stroke-width="1" fill="none" />
                <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2"
                    fill="none" />
            </svg>
        </span>
    </div>
</div>
