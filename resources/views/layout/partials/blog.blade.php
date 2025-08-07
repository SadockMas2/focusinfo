 <div class="container content-space-1 content-space-lg-3">
     <div class="row justify-content-lg-between">
         <div class="col-12 mb-lg-0">
             <div class="row d-flex justify-content-between">

                 @foreach ($articles as $blog)
                     <div class="col-md-4 mb-4 gap-4">
                         <a class="card card-transition align-items-start flex-wrap flex-row bg-img-start"
                             href="{{ route('blog_detail', $blog->slug) }}"
                             style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1)), url('{{ asset('storage/' . $blog->featured_image) }}'); background-size: cover; background-position: center; min-height: 25rem;">

                             <!-- Card Header -->
                             <div class="card-header w-100">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0">
                                         <span class="avatar avatar-sm avatar-circle">
                                             <img class="avatar-img"
                                                 src="{{ asset('storage/' . $blog->author->avatar) }} "
                                                 alt="{{ $blog->author->name }}">
                                         </span>
                                     </div>

                                     <div class="flex-grow-1 ms-3">
                                         <p class="card-title text-white mb-0">{{ $blog->author->name }}</p>
                                         <p class="card-text text-white-70 small">{{ $settings->site_name . '- Média' }}
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="card-footer mt-auto">
                                 <h5 class="text-white">{{ Str::limit($blog->title, 60, '...') }}
                                 </h5>
                             </div>
                             <!-- End Card Footer -->
                         </a>
                     </div>
                 @endforeach
             </div>

             <!-- Sticky Block End Point -->
             <div id="stickyBlockEndPoint"></div>

             <!-- Pagination -->
             @if ($articles->hasPages())
                 <nav aria-label="Page navigation">
                     <ul class="pagination justify-content-center justify-content-sm-start mb-0">
                         {{-- Previous Page Link --}}
                         @if ($articles->onFirstPage())
                             <li class="page-item disabled" aria-disabled="true">
                                 <span class="page-link" aria-hidden="true">&laquo;</span>
                             </li>
                         @else
                             <li class="page-item">
                                 <a class="page-link" href="{{ $articles->previousPageUrl() }}" rel="prev"
                                     aria-label="Previous">&laquo;</a>
                             </li>
                         @endif

                         {{-- Pagination Elements --}}
                         @foreach ($articles->links()->elements[0] as $page => $url)
                             @if ($page == $articles->currentPage())
                                 <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                             @else
                                 <li class="page-item"><a class="page-link"
                                         href="{{ $url }}">{{ $page }}</a></li>
                             @endif
                         @endforeach

                         {{-- Next Page Link --}}
                         @if ($articles->hasMorePages())
                             <li class="page-item">
                                 <a class="page-link" href="{{ $articles->nextPageUrl() }}" rel="next"
                                     aria-label="Next">&raquo;</a>
                             </li>
                         @else
                             <li class="page-item disabled" aria-disabled="true">
                                 <span class="page-link" aria-hidden="true">&raquo;</span>
                             </li>
                         @endif
                     </ul>
                 </nav>
             @endif

             <!-- End Pagination -->
         </div>
     </div>
     <!-- End Row -->
 </div>
