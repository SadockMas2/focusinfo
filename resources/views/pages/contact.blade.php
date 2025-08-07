@extends('layout.base')
@section('title', 'Contacts')
@section('page_title', 'Contacts')
@section('active_page', 'Contacts')


@section('content')
    @include('layout.partials.banner')
    @include('layout.partials.contact')
    <div class="content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-lg-3 overflow-hidden">
        <div class="container">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-lg-0">
                    <div class="mb-6">
                        <h1>Ecrivez-nous</h1>
                        <p class="lead">Nous sommes disponible pour repondre a tous vos messages</p>
                    </div>


                    <div style="width: 100%; height: 450px; overflow: hidden; border-radius: 8px;">
                        <iframe src="{{ $settings->maps }}" width="100%" height="100%" style="border: 0" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->

                <div class="col-lg-6">
                    <div class="position-relative">
                        <!-- Card -->
                        <div class="card card-lg">
                            <div class="card-body">
                                <h4>Ecrivez-nous</h4>

                                <!-- Form -->
                                <form id="contact-form" action="{{ route('contact.store') }}" method="post">
                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="hireUsFormFirstName">Noms</label>
                                        <input type="text" class="form-control form-control-lg" name="noms"
                                            id="hireUsFormFirstName" placeholder="Noms" aria-label="Noms">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="hireUsFormWorkEmail">Email</label>
                                        <input type="text" class="form-control form-control-lg" name="email"
                                            id="hireUsFormWorkEmail" placeholder="Email" aria-label="Email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label visually-hidden"
                                            for="hireUsFormWorkEmail">Téléphone</label>
                                        <input type="text" class="form-control form-control-lg" name="phonenumber"
                                            id="hireUsFormWorkEmail" placeholder="Téléphone" aria-label="Email">
                                    </div>
                                    <!-- End Form -->


                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="hireUsFormDetails">Message</label>
                                        <textarea class="form-control form-control-lg" name="message" id="hireUsFormDetails" placeholder="Message ..."
                                            aria-label="Message ..." rows="4"></textarea>
                                    </div>
                                    <!-- End Form -->



                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Envoyer le Message</button>
                                    </div>

                                    <div class="text-center">
                                        <span class="form-text">Nous répondons dans le plus bref delai</span>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute top-0 end-0 d-none d-md-block mt-n10"
                            style="width: 12rem; margin-right: -10rem;">
                            <img class="img-fluid" src="{{ asset('assets/svg/components/three-arrows-1.svg') }}"
                                alt="Image Description">
                        </figure>
                        <!-- End SVG Shape -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute bottom-0 end-0 zi-n1 d-none d-md-block mb-n10"
                            style="width: 15rem; margin-right: -8rem;">
                            <img class="img-fluid" src="{{ asset('assets/svg/illustrations/grid-grey.svg') }}"
                                alt="Image Description">
                        </figure>
                        <!-- End SVG Shape -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute bottom-0 end-0 d-none d-md-block me-n5 mb-n5"
                            style="width: 10rem;">
                            <img class="img-fluid" src="{{ asset('assets/svg/illustrations/plane.svg') }}"
                                alt="Image Description">
                        </figure>
                        <!-- End SVG Shape -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
    </div>


@endsection
