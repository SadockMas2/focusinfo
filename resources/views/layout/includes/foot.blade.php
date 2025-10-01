<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
    data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
</a>

<script>
    (function() {
        new HSHeader('#header').init()
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
            desktop: {
                position: 'left'
            }
        })

        new HSGoTo('.js-go-to')

        var swiper = new Swiper('.js-swiper-testimonials', {
            navigation: {
                nextEl: '.js-swiper-testimonials-button-next',
                prevEl: '.js-swiper-testimonials-button-prev',
            },
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                580: {
                    slidesPerView: 1
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


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
