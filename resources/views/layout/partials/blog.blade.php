 <div class="container content-space-1 content-space-lg-3">
     <div class="row justify-content-lg-between">
         <div class="col-12 mb-lg-0">
             <div class="row d-flex justify-content-between">

                 @foreach ($articles as $blog)
                     <div class="col-md-6 mb-7 gap-7">
                         <a class="card card-transition align-items-start flex-wrap flex-row bg-img-start"
                             href="blog-article.html"
                             style="background-image: url({{ asset('storage/' . $blog->featured_image) }}); min-height: 25rem;">
                             <!-- Card Header -->
                             <div class="card-header w-100">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0">
                                         <span class="avatar avatar-sm avatar-circle">
                                             <img class="avatar-img"
                                                 src="{{ asset('storage/' . $blog->featured_image) }}"
                                                 alt="{{ $blog->author->name }}">
                                         </span>
                                     </div>

                                     <div class="flex-grow-1 ms-3">
                                         <p class="card-title text-white mb-0">{{ $blog->author->name }}</p>
                                         <p class="card-text text-white-70 small">{{ $blog->author->name }}</p>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Card Header -->

                             <!-- Card Footer -->
                             <div class="card-footer mt-auto">
                                 <h3 class="text-white">{{ Str::limit($blog->title, 50, '...') }}
                                 </h3>
                                 {{-- <p class="text-white-70">Facebook launched the Watch platform in August</p> --}}
                             </div>
                             <!-- End Card Footer -->
                         </a>
                     </div>
                 @endforeach
             </div>

             <!-- Sticky Block End Point -->
             <div id="stickyBlockEndPoint"></div>

             <!-- Pagination -->
             <nav aria-label="Page navigation">
                 <ul class="pagination justify-content-center justify-content-sm-start mb-0">
                     <li class="page-item disabled">
                         <a class="page-link" href="#" tabindex="-1">
                             <span aria-hidden="true">&laquo;</span>
                         </a>
                     </li>
                     <li class="page-item active"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                         <a class="page-link" href="#">
                             <span aria-hidden="true">&raquo;</span>
                         </a>
                     </li>
                 </ul>
                 <!-- End Col -->
             </nav>
             <!-- End Pagination -->
         </div>
     </div>
     <!-- End Row -->
 </div>
