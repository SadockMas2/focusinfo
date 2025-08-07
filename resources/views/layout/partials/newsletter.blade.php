<div class="overflow-hidden">
    <div class="container content-space-b-2 content-space-b-lg-3">
        <div class="position-relative bg-soft-primary rounded-3 p-7">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5>Recevez nos conseils et actualités agricoles directement dans votre boîte mail</h5>
                </div>
                <!-- End Col -->

                <div class="col-lg-5">
                    <form>
                        <!-- Input Card -->
                        <div class="input-card input-card-sm mb-3">
                            <div class="input-card-form">
                                <label for="subscribeForm" class="form-label visually-hidden">Entrez votre email</label>
                                <input type="email" class="form-control form-control-lg" id="subscribeForm"
                                    placeholder="Entrez votre email" aria-label="Entrez votre email">
                            </div>
                            <button type="button" class="btn btn-primary btn-lg" id="heroNameAddOn">S’abonner</button>
                        </div>
                        <!-- End Input Card -->
                    </form>

                    <a class="link link-pointer" href="{{ route('contact') }}">Nous contacter directement</a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- SVG Shape -->
            <figure class="position-absolute top-0 end-0 zi-n1 d-none d-md-block mt-10 me-n10" style="width: 4rem;">
                <img class="img-fluid" src="{{ asset('assets/svg/components/pointer-up.svg') }}" alt="Illustration">
            </figure>
            <!-- End SVG Shape -->

            <!-- SVG Shape -->
            <figure class="position-absolute bottom-0 start-0 zi-n1 ms-n10 mb-n10" style="width: 15rem;">
                <img class="img-fluid" src="{{ asset('assets/svg/components/curved-shape.svg') }}" alt="Illustration">
            </figure>
            <!-- End SVG Shape -->
        </div>
    </div>
</div>
