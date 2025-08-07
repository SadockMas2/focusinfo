@extends('layout.base')
@section('title', 'Faire un Don')
@section('content')
@section('page_titlle', 'Faire un Don')
@section('active_page', 'Faire un Don')
@section('active_page_desc', 'Faire un Don')
{{-- @include('layout.partials.banner') --}}

<form class="js-validate" id="requestDon" method="POST" action="https://gao-drc.org/make-don" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="ygzP2hSxTrtdGCSte40LnI6hKNLUj2X49ItGjSum" autocomplete="off" />
    <div class="overflow-hidden mb-5 mt-5">
        <div class="container content-space-t-1 content-space-t-lg-2 mb-5">
            <div class="row justify-content-center align-items-lg-center">
                <div class="col-lg-7 mb-7 mb-sm-10 mb-lg-0">
                    <div class="pe-lg-5">
                        <div class="mb-4">
                            <h1 class="display-4">Faire un don</h1>
                            <p class="fs-3">
                                Votre soutien est essentiel pour concrétiser notre mission
                                ! En faisant un don, vous contribuez directement à la
                                protection de l&#039;environnement, à
                                l&#039;autonomisation des communautés locales et à la
                                lutte contre le changement climatique.
                            </p>
                            <p class="fs-3">
                                Chaque geste compte, ensemble nous pouvons faire la
                                différence pour un avenir plus vert et durable.
                            </p>
                        </div>

                        <div class="border-top border-2 my-5" style="max-width: 5rem"></div>

                        <!-- Blockquote -->
                        <figure>
                            <blockquote class="blockquote">
                                <em>
                                    En faisant un don à Green Africa Organization, je
                                    soutiens la préservation de l&#039;environnement et
                                    l&#039;amélioration des conditions de vie des
                                    communautés locales.
                                </em>
                            </blockquote>

                            <figcaption class="blockquote-footer">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="avatar avatar-circle" src="front/assets/img/160x160/testi2.PNG"
                                            alt="Image Description" />
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        John Doe
                                        <span class="blockquote-footer-source">Bienfaiteur anonyme</span>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Blockquote -->
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-9 col-lg-5">
                    <div class="position-relative">
                        <!-- Card -->
                        <div class="card card-shadow mb-3">
                            <div class="card-body">
                                <div class="text-center mb-5">
                                    <h4 class="card-title">Mode de payement</h4>
                                </div>

                                <!-- List -->
                                <ul class="list-unstyled list-py-1">
                                    <li>
                                        <!-- Radio Check -->
                                        <label
                                            class="form-check form-check-reverse form-check-select form-check-pinned-top-end"
                                            for="formCheckSelect1">
                                            <input type="radio" class="form-check-input"
                                                value="ACCESS BANK R.D.Congo (SA) Compte
                                                        30008113301
                                                        SWIFT "
                                                name="comment" id="formCheckSelect1" />
                                            <span class="form-check-label">
                                                <span class="fw-medium">Transfert ou virement bancaire</span>
                                                <span class="d-block h4 mb-0">ACCESS BANK R.D.Congo (SA) Compte
                                                    30008113301
                                                    SWIFT
                                                </span>
                                            </span>
                                            <span class="form-check-stretched-bg"></span>
                                        </label>
                                        <!-- End Radio Check -->
                                    </li>

                                    <li>
                                        <!-- Radio Check -->
                                        <label
                                            class="form-check form-check-reverse form-check-select form-check-pinned-top-end"
                                            for="formCheckSelect2">
                                            <input type="radio" value="AIRTEL MONEY : (243) 990 856 570"
                                                class="form-check-input" name="comment" id="formCheckSelect2"
                                                checked="" />
                                            <span class="form-check-label">
                                                <span class="fw-medium">Instrument de monnaie électronique<span
                                                        class="badge bg-soft-primary text-primary rounded-pill">Populaire</span></span>
                                                <span class="d-block h4 mb-0">AIRTEL MONEY : (243) 990 856 570</span>
                                            </span>
                                            <span class="form-check-stretched-bg"></span>
                                        </label>
                                        <!-- End Radio Check -->
                                    </li>

                                    <li>
                                        <!-- Radio Check -->
                                        <label
                                            class="form-check form-check-reverse form-check-select form-check-pinned-top-end"
                                            for="formCheckSelect3">
                                            <input type="radio" value="Cash: +243 852 125 691"
                                                class="form-check-input" name="comment" id="formCheckSelect3" />
                                            <span class="form-check-label">
                                                <span class="fw-medium">En espèces (Cash)</span>
                                                <span class="d-block fs-6 text-muted">Passez à nos locaux ou contactez
                                                    ce numéro:
                                                </span>
                                                <span class="d-block h4 mb-0">+243 852 125 691</span>
                                            </span>
                                            <span class="form-check-stretched-bg"></span>
                                        </label>
                                        <!-- End Radio Check -->
                                    </li>
                                </ul>
                                <!-- End List -->

                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary btn-pointer" data-bs-toggle="modal"
                                        data-bs-target="#donate-modal">
                                        Complétez le formulaire
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- SVG Shape -->
                        <figure class="position-absolute top-0 end-0 zi-n1 d-none d-sm-block me-n10"
                            style="width: 4rem">
                            <img class="img-fluid" src="front/assets/svg/components/feuilles.png"
                                alt="Image Description" />
                        </figure>
                        <!-- End SVG Shape -->
                    </div>

                    <div class="text-center">
                        <p class="fs-5 text-muted">
                            Avez-vous des questions?
                            <a class="link link-pointer" href="contactez-nous.html">Contactez-nous</a>
                        </p>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
    </div>
    <div id="donate-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Faire un don
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form -->

                    <div class="row gx-3">
                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label visually-hidden" for="signupFormFirstName">Votre nom</label>
                                <input type="text" class="form-control form-control-lg" name="firstname"
                                    id="signupFormFirstName" placeholder="Votre nom" aria-label="Votre nom"
                                    required="" />
                            </div>
                            <!-- End Form -->
                        </div>

                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label visually-hidden" for="signupFormLastName">Votre
                                    prénom</label>
                                <input type="text" class="form-control form-control-lg" name="signupFormLastName"
                                    id="signupFormLastName" placeholder="Votre prénom" aria-label="Votre prénom"
                                    required="" />
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-3">
                        <label class="form-label visually-hidden" for="signupFormEmail">Votre adresse mail</label>
                        <input type="email" class="form-control form-control-lg" name="email"
                            id="signupFormEmail" placeholder="Votre adresse mail" aria-label="Votre adresse mail"
                            required="" />
                    </div>
                    <!-- End Form -->
                    <!-- Form -->
                    <div class="mb-3">
                        <label class="form-label visually-hidden" for="amount">Montant</label>
                        <input type="number" class="form-control form-control-lg" name="amount" id="amount"
                            placeholder="Montant" aria-label="all.volunter.dontae_custom_amount" required="" />
                    </div>
                    <!-- End Form -->
                    <!-- Form -->
                    <div class="mb-3">
                        <label class="form-label" for="fileCapture">Preuve de paiement</label>
                        <input type="file" id="fileCapture" name="photo" class="form-control form-control-lg"
                            required="" />
                    </div>
                    <!-- End Form -->
                    <h6 class="d-none mt-3" id="message-don"></h6>

                    <!-- End Form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">
                        Fermer
                    </button>
                    <button type="submit" id="btn-submit" class="btn btn-primary">
                        Faire un don
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <script>
        $(document).ready(function() {
            $(document).on("change", "#preuve", function() {
                var fileInput = $(this)[0];
                var file = fileInput.files[0];

                if (file && file.size > 10 * 1024 * 1024) {
                    alert("Le fichier doit avoir une taille de 10 MB max.");
                }

                $("#btn-submit").prop("disabled", false);
            });

            $("#btn-submit").click(function(e) {
                e.preventDefault();
                e.preventDefault();
                var form = $("#requestDon");

                const fd = new FormData(form.get(0));

                var submitBtn = $(this);
                submitBtn.prop("disabled", true);
                submitBtn.html("Traitement...");
                var message = $("#message-don");
                $.ajax({
                    url: form.attr("action"),
                    method: form.attr("method"),
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.status == true) {
                            message.removeClass("text-danger");
                            message.removeClass("d-none");
                            message.addClass("text-success");
                            message.text(response.message);
                            form.trigger("reset");
                        } else if (response.status == false) {
                            message.removeClass("text-success");
                            message.removeClass("d-none");
                            message.addClass("text-danger");
                            message.text(response.message);
                        }
                    },
                });
                submitBtn.html("Faire un don");
            });
        });
    </script>
</form>


@endsection
