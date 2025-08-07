<section class="volunteer-section-2 p-b-120 p-b-md-100 p-b-xs-80">
    <div class="container text-center">
        <div class="m-b-50 m-b-xs-40">
            <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                {{-- <img alt="icon-2" src="assets/img/icons/icon-2.svg"> --}}
                <span>Nos Bénévoles</span>
            </div>
            <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <h2>Ils travaillent avec nous</h2>
            </div>
        </div>
        <div class="row row-gap-4 p-b-60" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">

            @foreach ($benevoles as $benevole)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="volunteer-card-2">
                        <div class="thumb">
                            <a href='volunteer-details.html'><img alt="thumb-1"
                                    src="{{ asset('storage/' . $benevole->photo) }}"></a>
                            <div class="socials">
                                <button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
                                <div class="social-links">
                                    <a href="{{ $benevole->facebook }}"><i class="fab fa-facebook-f"></i></a> <a
                                        href="{{ $benevole->twitter }}"><i class="fab fa-x-twitter"></i></a> <a
                                        href="{{ $benevole->instagram }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div><a class='author-info' href='#'>
                                <h5 style="font-size:17px">{{ $benevole->noms }}</h5>
                                <p>{{ $benevole->fonction }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

              <div class="row justify-content-center text-center m-t-20">
                <div class="col-xl-6">
                    <div class="project-pagination">
                        @if ($benevoles->hasPages())
                            <ul class="pagination">
                                @foreach ($benevoles->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="page-item disabled" aria-current="page">
                                            <span class="page-link active">{{ $element }}</span>
                                    @endif
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $benevoles->currentPage())
                                                <li class="page-item" aria-current="page">
                                                    <span class="page-link active">{{ $page }}</span>
                                                @else
                                                <li class="page-item"><a class="page-link"
                                                        href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach


                            </ul>
                        @endif

                        {{-- {{ $benevoles->links('pagination::bootstrap-5') }} --}}
                    </div>
                </div>
            </div>


        </div>
        <div class="contact-details" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="details-btn">
                <a class='e-primary-btn has-icon' href='{{ route('equipe') }}'>Nos Bénévoles <span
                        class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i
                                class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="join-us-btn">
                <a class='review-btn' href='{{ route('benevole') }}'><img alt="shape-12"
                        src="assets/img/shapes/shape-12.webp"> <span>Devenir Bénévoles</span> <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
