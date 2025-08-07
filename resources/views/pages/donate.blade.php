@extends('layout.base')
@section('title', 'Faire un Don')
@section('page_titlle', 'Faire un Don')
@section('active_page', 'Faire un Don')
@section('active_page_desc', 'Faire un Don')
@section('content')
    @include('layout.partials.banner')

    <form class="js-validate" id="requestDon"  action="#" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="ygzP2hSxTrtdGCSte40LnI6hKNLUj2X49ItGjSum" autocomplete="off" />
        <div class="overflow-hidden mb-5 mt-5">
            <div class="container content-space-t-1 content-space-t-lg-2 mb-5">
                <div class="row justify-content-center align-items-lg-center">
                    <div class="col-lg-7 mb-7 mb-sm-10 mb-lg-0">
                        <div class="pe-lg-5">
                            <div class="mb-4">
                                <h1 class="display-4">Faites un don</h1>

                                <p class="fs-3">
                                    Soutenez notre Cause en nous faisant un Don.
                                </p>
                            </div>

                            <div class="border-top border-2 my-5" style="max-width: 5rem"></div>
                            <img src="{{ asset('storage/'.$settings->photo_2) }}" style="height:300px">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-9 col-lg-5">
                        <div class="position-relative">
                            <!-- Card -->
                            <div class="card card-shadow mb-3">
                                <div class="card-body">
                                    <div class="text-center mb-5">
                                        <h4 class="card-title">Methode de paiement</h4>
                                    </div>

                                    <!-- List -->
                                    <ul class="list-unstyled list-py-1">

                                        @foreach ($methodes as $methode)
                                            <li>
                                                <!-- Radio Check -->
                                                <label
                                                    class="form-check form-check-reverse form-check-select form-check-pinned-top-end"
                                                    for="formCheckSelect1">
                                                    <input type="radio" class="form-check-input"
                                                        value="{{ $methode->id }}" name="comment" id="formCheckSelect1" />
                                                    <span class="form-check-label">
                                                        <span class="fw-medium">{{ $methode->name }}</span>
                                                        <span class="d-block h4 mb-0">{{ $methode->details }}
                                                        </span>
                                                    </span>
                                                    <span class="form-check-stretched-bg"></span>
                                                </label>
                                                <!-- End Radio Check -->
                                            </li>
                                        @endforeach



                                        {{-- <li>
                                            <!-- Radio Check -->
                                            <label
                                                class="form-check form-check-reverse form-check-select form-check-pinned-top-end"
                                                for="formCheckSelect3">
                                                <input type="radio" value=" Cash : {{ $settings->contact_phone }}"
                                                    class="form-check-input" name="comment" id="formCheckSelect3" />
                                                <span class="form-check-label">
                                                    <span class="fw-medium">En espèces (Cash)</span>
                                                    <span class="d-block fs-6 text-muted">Contactez-nous à ce numero pour un
                                                        payement en espèces : {{ $settings->contact_phone }}
                                                    </span>
                                                    <span class="d-block h4 mb-0">{{ $settings->contact_phone }}</span>
                                                </span>
                                                <span class="form-check-stretched-bg"></span>
                                            </label>
                                            <!-- End Radio Check -->
                                        </li> --}}
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


                        </div>

                        <div class="text-center">
                            <p class="fs-5 text-muted">
                                Avez-vous des Questions?
                                <a class="link link-pointer" href="{{ route('contact') }}">Ecrivez-nous</a>
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
                            <input type="email" class="form-control form-control-lg" name="email" id="signupFormEmail"
                                placeholder="Votre adresse mail" aria-label="Votre adresse mail" required="" />
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
