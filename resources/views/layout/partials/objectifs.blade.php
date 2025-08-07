 <div class="bg-soft-dark-to-start-75 overflow-hidden" id="objectifs">
     <div class="container content-space-1">
         <div class="row justify-content-lg-between align-items-md-center">
             <div class="col-md-6 col-lg-5 mb-10 mb-lg-0">
                 <div class="position-relative">
                     <img class="img-fluid" src="{{ asset('storage/' . $settings->photo_2) }}" alt="Image Description">

                     <!-- SVG Shape -->
                     <figure class="position-absolute bottom-0 start-0 zi-n1 mb-n7 ms-n7" style="width: 10rem;">
                         <img class="img-fluid" src="{{ asset('assets/svg/components/dots.svg') }}"
                             alt="Image Description">
                     </figure>
                     <!-- End SVG Shape -->
                 </div>
             </div>
             <!-- End Col -->

             <div class="col-md-6">
                 <!-- Blockquote -->
                 <figure class="blockquote-lg mb-7">
                     <span class="text-cap text-muted">Nos Objectifs</span>

                     {{ $settings->objectifs }}
                 </figure>
             </div>
             <!-- End Col -->
         </div>
         <!-- End Row -->
     </div>
 </div>
