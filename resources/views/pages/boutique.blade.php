@extends('layout.base')
@section('content')
@section('title', 'Boutique')

@section('page_title', 'Boutique')
@section('active_page_desc', 'Achetez un produit pour soutenir notre cause')
@include('layout.partials.banner')
<div style="height:100px"></div>
<!-- Sliding Image -->
<!-- Card Grid -->
<div class="container content-space-1">
    <!-- Heading -->
    <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
        <h2>Notre Boutique</h2>
        <p>Achetez un produit pour soutenir notre cause.</p>
    </div>
    <!-- End Heading -->

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

        @foreach ($produits as $produit)
            <div class="col mb-5 mb-md-0">
                <!-- Card -->
                <a class="card card-ghost card-transition-zoom h-100"
                    href="https://wa.me/{{ $settings->contact_phone }}?text={{ 'Je voudrais acheter ce produit : ' . $produit->produit . '. Quelle est la procedure. Merci!' }}"
                    target="_blank">
                    <div class="card-transition-zoom-item">
                        <img class="card-img" style="height:250px; object-fit: cover;"
                            src="{{ asset('storage/' . $produit->photo) }}" alt="Image Description">
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <h4>{{ $produit->produit }}</h4>
                        <h4>{{ $produit->prix }}</h4>
                    </div>
                    <div class="card-footer">
                        <a class="card-link"
                            href="https://wa.me/{{ $settings->contact_phone }}?text={{ 'Je voudrais acheter ce produit : ' . $produit->produit . '. Quelle est la procedure. Merci!' }}"
                            target="_blank">Acheter</a>


                    </div>
                </a>
                <!-- End Card -->
            </div>
        @endforeach

        <!-- End Col -->

        {{-- <div class="col mb-5 mb-md-0">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../blog-article.html">
                <div class="card-pinned card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img2.jpg" alt="Image Description">
                    <span class="badge bg-dark text-white card-pinned-top-end">Sponsored</span>
                </div>

                <div class="card-body">
                    <h4>Studio by Htmlstream</h4>
                    <p class="card-text">Produce professional, reliable streams easily leveraging Htmlstream's
                        innovative broadcast studio</p>
                </div>

                <div class="card-footer">
                    <span class="card-link">Explore Studio</span>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col">
            <!-- Card -->
            <a class="card card-ghost card-transition-zoom h-100" href="../blog-article.html">
                <div class="card-transition-zoom-item">
                    <img class="card-img" src="../assets/img/580x480/img3.jpg" alt="Image Description">
                </div>

                <div class="card-body">
                    <h4>Onsite</h4>
                    <p class="card-text">Optimize your in-person experience with best-in-class capabilities like badge
                        printing and lead retrieval</p>
                </div>

                <div class="card-footer">
                    <span class="card-link">Explore Onsite</span>
                </div>
            </a>
            <!-- End Card -->
        </div> --}}
        <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
<!-- End Card Grid -->

@endsection
