 <div class="overflow-hidden" id="domaines-d-intervention">
     <div class="container border-top content-space-t-1 content-space-t-lg-2">
         <div class="row justify-content-lg-between">
             <div class="col-md-4 mb-5 mb-md-0">
                 <div class="mt-md-10 mb-5">
                     <h2>Secteurs d'activités</h2>
                     <p>Agriculture, élevage, apiculture et agro-transformation : chez EITPN, nous excellons dans des
                         secteurs stratégiques pour une croissance durable et inclusive</p>
                     <p>Faites un don aujourd’hui et soyez acteur du changement</p>
                 </div>

                 <!-- Alert -->
                 <a href="{{ route('don') }}" class="btn btn-primary">Faites un Don</a>

                 <!-- End Alert -->
             </div>
             <!-- End Col -->

             <div class="col-md-7">
                 <!-- Swiper Slider -->
                 <div class="swiper-center-mode-end">
                     <div class="js-swiper-card-grid swiper swiper-equal-height ps-4">
                         <div class="swiper-wrapper">
                             @foreach ($domains as $domaine)
                                 <div class="swiper-slide pt-4 pb-8">
                                     <!-- Card -->
                                     <a class="card card-transition" href="#">
                                         <div class="card-pinned">
                                             <img class="card-img-top" src="{{ asset('storage/' . $domaine->image) }}"
                                                 style="height:250px; object-fit:cover" alt="Image Description">
                                             {{-- <span class="badge bg-dark text-white card-pinned-top-end">Design</span> --}}
                                         </div>
                                         <div class="card-body">
                                             <h5 class="card-title">{{ $domaine->name }}</h5>
                                             <p>{{ Str::limit($domaine->description, 150, '...') }}</p>
                                         </div>
                                         <div class="card-footer pt-0">
                                             <span class="card-link">Lire plus</span>
                                         </div>
                                     </a>
                                     <!-- End Card -->
                                 </div>
                             @endforeach

                             <div class="swiper-slide pt-4 pb-8">
                                 <!-- Card -->
                                 <a class="card card-transition bg-primary" href="#"
                                     style="background-image: url({{ asset('assets/svg/components/wave-pattern-light.svg') }});">
                                     <div class="card-body">
                                         <span class="card-subtitle text-white mb-3">Secteurs d'activités</span>
                                         <h3 class="card-title text-white lh-base">Decouvrez tous nos secteurs
                                             d'activités</h3>
                                     </div>
                                     <div class="card-footer pt-0">
                                         <span class="card-link link-light">Lire plus</span>
                                     </div>
                                 </a>
                                 <!-- End Card -->
                             </div>


                         </div>

                         <!-- Arrows -->
                         <div class="js-swiper-card-grid-button-prev swiper-button-prev swiper-static-button-prev">
                         </div>
                         <div class="js-swiper-card-grid-button-next swiper-button-next swiper-static-button-next">
                         </div>

                         <!-- Preloader -->
                         <div class="js-swiper-preloader swiper-preloader">
                             <div class="spinner-border text-primary" role="status">
                                 <span class="visually-hidden">Loading...</span>
                             </div>
                         </div>
                         <!-- End Preloader -->
                     </div>
                 </div>
                 <!-- End Swiper Slider -->
             </div>
             <!-- End Col -->
         </div>
         <!-- End Row -->
     </div>
 </div>





