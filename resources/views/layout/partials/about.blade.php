 <div class="overflow-hidden content-space-t-1">
     <div class="container">
         <div class="bg-dark rounded-3 p-4 p-sm-8 p-lg-10 mx-md-n7 mx-lg-n10">
             <div class="row align-items-lg-center">
                 <div class="col-lg-7 order-lg-2 mb-5 mb-lg-0">
                     <div class="position-relative">
                         <div class="w-75 ms-auto">
                             <img class="img-fluid rounded-3" src="{{ asset('storage/' . $settings->photo_1) }}"
                                 alt="{{ $settings->site_name }}">
                         </div>

                         <div class="position-absolute bottom-0 start-0 mb-10 ms-5">
                             <img class="img-fluid w-75 shadow rounded-3"
                                 src="{{ asset('storage/' . $settings->photo_2) }}" alt="{{ $settings->site_name }}">
                         </div>

                         <!-- SVG Shape -->
                         <figure class="position-absolute top-0 end-0 mt-n7 me-n7" style="width: 10rem;">
                             <img class="img-fluid" src="{{ 'assets/svg/components/dots-warning.svg' }}"
                                 alt="{{ $settings->site_name }}">
                         </figure>
                         <!-- End SVG Shape -->
                     </div>
                 </div>
                 <!-- End Col -->

                 <div class="col-lg-5">
                     <div class="pe-lg-5">
                         <div class="mb-5">
                             <h2 class="text-white">A Propos de Nous</h2>
                             <p class="text-white-70" style="text-align:justify">
                                 {{ Str::limit($settings->apercu, 600, '...') }}
                             </p>
                         </div>

                         {{-- {!! $settings->objectifs_specifiques!!} --}}
                         <!-- End List Checked -->

                         <a class="btn btn-primary btn-pointer" href="{{route('about')}}">Lire plus</a>
                     </div>
                 </div>
                 <!-- End Col -->
             </div>
             <!-- End Row -->
         </div>
     </div>
 </div>
