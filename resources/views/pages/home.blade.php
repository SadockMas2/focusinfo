@extends('layout.base')
@section('content')
    {{-- @include('layout.partials.slider') --}}
    <div style="height: 100px"></div>
    @include('layout.partials.about')
    <div style="height: 100px"></div>
    @include('layout.partials.domaines')
    <div style="height: 100px"></div>
    @include('layout.partials.counter')
    <div style="height: 100px"></div>
    {{-- @include('layout.partials.cta') --}}
    @include('layout.partials.partner')

    <div class="overflow-hidden">
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-1 content-space-b-lg-2">
            <div class="w-lg-50 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-5">
                    <h1 class="display-4">Nos Article</h1>
                    <p>Voici en articles nos dernières activités.</p>
                </div>
            </div>
        </div>       
    </div>
    @include('layout.partials.blog')



    <script>
        (function() {
            // INITIALIZATION OF NAVBAR
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            const megaMenu = new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF TOGGLE PASSWORD
            // =======================================================
            new HSTogglePassword('.js-toggle-password')


            // INITIALIZATION OF VIDEO BG
            // =======================================================
            document.querySelectorAll('.js-video-bg').forEach(item => {
                new HSVideoBg(item).init()
            })


            // INITIALIZATION OF SWIPER
            // =======================================================
            var swiper = new Swiper('.js-swiper-card-grid', {
                navigation: {
                    nextEl: '.js-swiper-card-grid-button-next',
                    prevEl: '.js-swiper-card-grid-button-prev',
                },
                slidesPerView: 1,
                spaceBetween: 30,
                loop: 1,
                breakpoints: {
                    480: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                },
                on: {
                    'imagesReady': function(swiper) {
                        const preloader = swiper.el.querySelector('.js-swiper-preloader')
                        preloader.parentNode.removeChild(preloader)
                    }
                }
            });
        })()
    </script>
@endsection
