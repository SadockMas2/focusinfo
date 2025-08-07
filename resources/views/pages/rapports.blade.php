@extends('layout.base')
@section('title', 'Nos Rapports')
@section('active_page', 'Nos Rapports')
@section('active_page_desc', 'Nos Rapports')
@section('page_title', 'Voici les Rapport de nos activités')

@section('content')
    @include('layout.partials.banner')
    <div class="overflow-hidden">
        <div class="container content-space-1 content-space-b-lg-3">
            <!-- Heading -->
            <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
                <h1>Rapports</h1>
                <p>Rapport des Activités </p>
            </div>
            <!-- End Heading -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-7">
                @foreach ($rapports as $rapport)
                    <div class="col mb-7 mb-md-10">
                        <!-- Card -->
                        <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                            <div class="card-pinned card-transition-zoom-item">
                                <img class="card-img" src="{{ 'storage/' . $rapport->image }}" alt="Image Description">
                                <span class="badge bg-dark text-white card-pinned-top-end">Rapports</span>
                            </div>

                            <div class="card-body">
                                <h4>{{ $rapport->titre }}</h4>
                                <p class="card-text">{{ Str::limit($rapport->description, 60, '...') }}</p>
                            </div>

                            <div class="card-footer">
                                <a href="{{ asset('storage/' . $rapport->file) }}" download=""
                                    class="card-link">Télécharger</a>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                @endforeach

            </div>
            <!-- End Row -->

            @if ($rapports->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center justify-content-sm-start mb-0">
                        {{-- Previous Page Link --}}
                        @if ($rapports->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $rapports->previousPageUrl() }}" rel="prev"
                                    aria-label="Previous">&laquo;</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($rapports->links()->elements[0] as $page => $url)
                            @if ($page == $rapports->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($rapports->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $rapports->nextPageUrl() }}" rel="next"
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
        </div>
    </div>
@endsection
