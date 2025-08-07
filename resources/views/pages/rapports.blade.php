@extends('layout.base')
@section('title', 'Rapports')

@section('content')
    @include('layout.partials.banner')
    <div class="overflow-hidden">
        <div class="container content-space-1 content-space-b-lg-3">
            <!-- Heading -->
            <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
                <h1>Insights</h1>
                <p>Stay in the know with insights from industry experts.</p>
            </div>
            <!-- End Heading -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-7">
                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-pinned card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img14.jpg" alt="Image Description">
                            <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
                        </div>

                        <div class="card-body">
                            <h4>Studio by Htmlstream</h4>
                            <p class="card-text">Produce professional, reliable streams easily leveraging Htmlstream's
                                innovative broadcast studio</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img15.jpg" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>Onsite</h4>
                            <p class="card-text">Optimize your in-person experience with best-in-class capabilities like
                                badge printing and lead retrieval</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-borderless card-transition h-100 bg-img-end" href="blog-article.html"
                        style="background-image: url(assets/svg/components/card-12.svg); min-height: 15rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-column h-100">
                                <div class="mb-1">
                                    <span class="card-title fs-3 text-white"><span class="fw-bold">Unify</span> Press
                                        publishes books about economic and technological advancement.</span>
                                </div>
                                <div class="mt-1">
                                    <span class="card-link link-light">Visit the site</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img7.jpg" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>The complete guide to OKRs</h4>
                            <p class="card-text">How to make objectives and key results work for your company</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-pinned card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img8.jpg" alt="Image Description">
                            <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
                        </div>

                        <div class="card-body">
                            <h4>People program models</h4>
                            <p class="card-text">Six approaches to bringing your People strategy to life</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img9.jpg" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>HR calendar 2021</h4>
                            <p class="card-text">Workplace holidays, important deadlines, and monthly People strategy
                                advice.</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img18.jpg" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>The ultimate guide to employee development</h4>
                            <p class="card-text">How to use job levels, competencies, and growth plans to make career
                                advancement crystal clear.</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-pinned card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img17.jpg" alt="Image Description">
                            <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
                        </div>

                        <div class="card-body">
                            <h4>The ultimate guide to employee engagement surveys</h4>
                            <p class="card-text">A how-to guide for running and acting on your next employee engagement
                                survey.</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col mb-7 mb-md-10">
                    <!-- Card -->
                    <a class="card card-ghost card-transition-zoom h-100" href="blog-article.html">
                        <div class="card-transition-zoom-item">
                            <img class="card-img" src="assets/img/580x480/img16.jpg" alt="Image Description">
                        </div>

                        <div class="card-body">
                            <h4>The evolution of performance management</h4>
                            <p class="card-text">The story of how we ended up with performance reviews</p>
                        </div>

                        <div class="card-footer">
                            <span class="card-link">Read more</span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Pagination -->
            <nav class="d-flex justify-content-center" aria-label="Page navigation">
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
@endsection
