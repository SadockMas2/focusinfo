 <footer class="bg-dark">
     <div class="container">
         <div class="row align-items-center pt-8 pb-4">

             <div class="row align-items-start col-md mb-5 mb-md-0">
                 <div class="col"><img src="{{ asset('storage/' . $settings->logo) }}"
                         style="height:70px; object-fit: contain"></div>

             </div>
             <div class="col-md-auto">
                 <div class="d-grid d-sm-flex gap-3">
                     <a class="btn btn-primary" href="{{ route('boutique') }}">Acheter un Produit</a>
                     <a class="btn btn-ghost-light btn-pointer" href="{{ route('don') }}">Faire un Don</a>
                 </div>
             </div>
         </div>
         <div class="border-bottom border-white-10">
             <div class="row py-6">
                 <div class="col-6 col-sm-4 col-lg mb-7 mb-lg-0">
                     <span class="text-cap text-white">{{ $settings->site_name }}</span>
                     <p class="list-unstyled list-py-1 mb-0 text-light" style="text-align: justify;">
                         {{ $settings->description }}
                     </p>
                     <!-- End List -->
                 </div>

                 <div class="col-6 col-sm-4 col-lg mb-7 mb-sm-0">
                     <span class="text-cap text-white">A Propos de Nous</span>

                     <!-- List -->
                     <ul class="list-unstyled list-py-1 mb-0">
                         <li><a class="link link-light link-light-75" href="{{ route('about') }}">Qui sommes-nous ?</a>
                         </li>
                         <li><a class="link link-light link-light-75" href="{{ route('equipe') }}">Notre
                                 Equipe</a></li>
                         <li><a class="link link-light link-light-75"
                                 href="{{ route('about') }}#partenaires">Partenaires</a></li>
                         <li><a class="link link-light link-light-75" href="{{ route('contact') }}">Contacts</a></li>
                     </ul>
                     <!-- End List -->
                 </div>
                 <!-- End Col -->

                 <div class="col-6 col-sm-4 col-lg mb-7 mb-sm-0">
                     <span class="text-cap text-white">Liens Rapides</span>

                     {{-- <ul class="list-unstyled list-py-1 mb-5">
                         <li><a class="link link-light link-light-75" href="#"></a></li>

                     </ul> --}}
                     {{-- <span class="text-cap text-white">Docs</span> --}}

                     <!-- List -->
                     <ul class="list-unstyled list-py-1 mb-0">
                         <li><a class="link link-light link-light-75" href="{{ route('boutique') }}">Boutique</a></li>
                         <li><a class="link link-light link-light-75" href="{{ route('about') }}#domaines">Secteus
                                 d'Activités</a></li>
                         <li><a class="link link-light link-light-75" href="{{ route('rapports') }}">Rapports</a></li>
                         {{-- <li><a class="link link-light link-light-75" href="#">Réalisations</a></li> --}}
                     </ul>
                     <!-- End List -->
                 </div>
                 <!-- End Col -->

                 <div class="col-6 col-sm-4 col-lg">
                     <span class="text-cap text-white">Nos Reseaux Sociaux</span>

                     <!-- List -->
                     <ul class="list-unstyled list-py-2 mb-0">
                         <li><a class="link link-light link-light-75" href="emailto:{{ $settings->contact_email }}"
                                 target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-envelope-open-fill"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>{{ $settings->contact_email }}</span>
                                     </div>
                                 </div>
                             </a></li>

                         <li>
                             <a class="link link-light link-light-75" href="{{ $settings->facebook }}" target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-facebook"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>Facebook</span>
                                     </div>
                                 </div>
                             </a>
                         </li>

                         <li><a class="link link-light link-light-75" href="{{ $settings->linkedin }}" target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-linkedin"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>Linkedin</span>
                                     </div>
                                 </div>
                             </a></li>

                         <li><a class="link link-light link-light-75" href="{{ $settings->twitter }}" target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-twitter"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>Twitter</span>
                                     </div>
                                 </div>
                             </a></li>

                         <li>
                             <a class="link link-light link-light-75" href="{{ $settings->instagram }}"
                                 target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-instagram"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>Instagram</span>
                                     </div>
                                 </div>
                             </a>
                         </li>

                         <li>
                             <a class="link link-light link-light-75"
                                 href="https://wa.me/{{ $settings->contact_phone }}?text=Bonjour" target="_blank">
                                 <div class="d-flex">
                                     <div class="flex-shrink-0">
                                         <i class="bi-phone"></i>
                                     </div>

                                     <div class="flex-grow-1 ms-2">
                                         <span>Whatsaap</span>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </ul>
                     <!-- End List -->
                 </div>
                 <!-- End Col -->
             </div>
             <!-- End Row -->
         </div>

         <div class="row align-items-md-center py-6">
             <div class="col-md mb-3 mb-md-0">
                 <!-- List -->
                 <ul class="list-inline list-px-2 mb-0">
                     <li class="list-inline-item"><a class="link link-light link-light-75"
                             href="#">{{ $settings->site_name }}@
                             {{ date('Y') }} Tous drois réservés</a></li>


                     <li class="list-inline-item">
                         <!-- Button Group -->
                         <div class="btn-group">
                             <a class="link link-light link-light-75" href="#" id="selectLanguage"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="d-flex align-items-center">
                                     <img class="avatar avatar-xss avatar-circle me-2"
                                         src="{{ asset('img/flags/' . app()->getLocale() . '.png') }}" alt="Lang"
                                         width="16">
                                     <span class="navbar-dropdown-menu-media-title text-capitalize text-light">
                                         {{ app()->getLocale() === 'fr' ? 'Français' : 'English' }}
                                     </span>
                                 </span>
                             </a>

                             <div class="dropdown-menu">
                                 <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                     href="{{ route('change_language', 'en') }}">
                                     <img class="avatar avatar-xss avatar-circle me-2"
                                         src="{{ asset('img/flags/en.png') }}" alt="EN" width="16">
                                     <span class="navbar-dropdown-menu-media-title">English</span>
                                 </a>
                                 <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                                     href="{{ route('change_language', 'fr') }}">
                                     <img class="avatar avatar-xss avatar-circle me-2"
                                         src="{{ asset('img/flags/fr.png') }}" alt="FR" width="16">
                                     <span class="navbar-dropdown-menu-media-title">Français</span>
                                 </a>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>

             <div class="col-md-auto">
                 <p class="fs-5 text-white-70 mb-0">Designed by <a style="color:orange"
                         href="https://www.kivusoft.net" target="_blank">Kivusoft Technologies</a></p>
             </div>
             <!-- End Col -->
         </div>
         <!-- End Row -->
     </div>
 </footer>
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

 <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
 <script src="{{ asset('assets/js/theme.min.js') }}"></script>
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
 </body>

 </html>
