@extends('layout.base')
@section('content')
@section('title', 'Galerie Videos')
@section('page_titlle', 'Galerie Videos')
@section('active_page', 'Galerie Videos')
@section('active_page_desc', 'Galerie Videos')
@include('layout.partials.banner')

<div style="height:100px"></div>

<!-- Card Grid -->
<div class="container content-space-1 overflow-hidden">
    <!-- Heading -->
    <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
        <h2>The work we do,<br>and the people we help</h2>
    </div>
    <!-- End Heading -->

    <div class="row row-cols-1 row-cols-sm-2 gx-7">
        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-pinned card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img23.jpg" alt="Image Description">
                    <span class="badge bg-dark text-white card-pinned-top-end">New addition</span>
                </div>

                <div class="card-body">
                    <h4>Proof – <span class="fw-medium">Creating a design system for a suite of products</span></h4>
                    <p class="card-text">Branding</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img22.jpg" alt="Image Description">
                </div>

                <div class="card-body">
                    <h4>Front – <span class="fw-medium">Multipurpose Responsive Template</span></h4>
                    <p class="card-text">Admin & Dashboard</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img21.jpg" alt="Image Description">
                </div>

                <div class="card-body">
                    <h4>Front Dashboard – <span class="fw-medium">Admin & Dashboard Template</span></h4>
                    <p class="card-text">Landing & Corporate</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-pinned card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img20.jpg" alt="Image Description">
                    <span class="badge bg-dark text-white card-pinned-top-end">New addition</span>
                </div>

                <div class="card-body">
                    <h4>Unify – <span class="fw-medium">Multipurpose Template + UI Kit</span></h4>
                    <p class="card-text">Admin & Dashboard</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img19.jpg" alt="Image Description">
                </div>

                <div class="card-body">
                    <h4>Crab – <span class="fw-medium">Web Design & Development</span></h4>
                    <p class="card-text">Landing & Corporate</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-5">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../portfolio-case-study.html">
                <div class="card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img24.jpg" alt="Image Description">
                </div>

                <div class="card-body">
                    <h4>Garvest – <span class="fw-medium">Reinventing customer care for the home</span></h4>
                    <p class="card-text">Branding</p>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->

    <div class="text-center">
        <a class="btn btn-white btn-pointer" href="../page-customer-stories.html">View all case studies</a>
    </div>
</div>
<!-- End Card Grid -->

@endsection
