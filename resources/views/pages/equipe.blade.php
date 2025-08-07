@extends('layout.base')
@section('title', 'Notre Equipe')

@section('content')

     <div
        class="d-flex bg-img-center mt-5"
        style="
          background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url(front/assets/img/others/our-team-hero.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div
          class="container d-flex justify-content-end flex-column min-vh-lg-75 content-space-1 content-space-lg-b-3"
        >
          <div class="w-lg-65">
            <span class="d-block text-white mb-3"
              ><a class="badge bg-primary text-white rounded-pill ms-1" href="#"
                >Green Africa Organisation</a
              ></span
            >
            <h1 class="display-4 text-white">Notre équipe</h1>
            <p class="lead text-white">
              Découvrez nos bénévoles avec lesquels nous menons nos actions.
            </p>
          </div>
        </div>
      </div>
      <div class="container content-space-b-1 content-space-b-lg-3 mt-5">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
          <h2>Co-fondateurs</h2>
        </div>
        <!-- End Heading -->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
          <div class="col mb-10">
            <!-- Team -->
            <div class="w-sm-65 text-center mx-auto">
              <a href="storage/users/1737463331.png" data-lightbox="photos">
                <img
                  class="img-fluid rounded-3 mb-4"
                  src="storage/users/1737463331.png"
                  alt="Image Description"
              /></a>
              <h5 class="mb-1">Monsieur Daniel</h5>
              <span class="d-block">PCA et Directeur</span>
            </div>
            <!-- End Team -->
          </div>
          <!-- End Col -->
          <div class="col mb-10">
            <!-- Team -->
            <div class="w-sm-65 text-center mx-auto">
              <a href="storage/users/1737463523.png" data-lightbox="photos">
                <img
                  class="img-fluid rounded-3 mb-4"
                  src="storage/users/1737463523.png"
                  alt="Image Description"
              /></a>
              <h5 class="mb-1">Madame la financière</h5>
              <span class="d-block">Administratrice des finaces</span>
            </div>
            <!-- End Team -->
          </div>
          <!-- End Col -->
          <div class="col mb-10">
            <!-- Team -->
            <div class="w-sm-65 text-center mx-auto">
              <a href="storage/users/1737463678.png" data-lightbox="photos">
                <img
                  class="img-fluid rounded-3 mb-4"
                  src="storage/users/1737463678.png"
                  alt="Image Description"
              /></a>
              <h5 class="mb-1">Monsieur X</h5>
              <span class="d-block">Chargé de programme</span>
            </div>
            <!-- End Team -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-10">
          <h2>Equipe opérationnelle</h2>
        </div>
        <!-- End Heading -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
          <div class="col mb-10">
            <!-- Team -->
            <div class="w-sm-65 text-center mx-auto">
              <img
                class="img-fluid rounded-3 mb-4"
                src="storage/users/1737463794.png"
                alt="Image Description"
              />
              <h5 class="mb-1">Madame X</h5>
              <span class="d-block">Directrice des Ressources Humaines</span>
            </div>
            <!-- End Team -->
          </div>
          <!-- End Col -->
          <div class="col mb-10">
            <!-- Team -->
            <div class="w-sm-65 text-center mx-auto">
              <img
                class="img-fluid rounded-3 mb-4"
                src="storage/users/1737463847.png"
                alt="Image Description"
              />
              <h5 class="mb-1">Monsieur X</h5>
              <span class="d-block">Logistique</span>
            </div>
            <!-- End Team -->
          </div>
          <!-- End Col -->
        </div>
      </div>
      <div class="overflow-hidden">
        <div class="container content-space-b-2 content-space-b-lg-3">
          <div class="position-relative bg-soft-primary rounded-3 p-7">
            <div class="row justify-content-lg-between align-items-lg-center">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <h2>Abonnez-vous et recevez des nouvelles sur nos actions.</h2>
              </div>
              <!-- End Col -->

              <div class="col-lg-5">
                <form
                  method="POST"
                  action="https://gao-drc.org/subscribe-newsletter"
                  id="requestNewsLetter"
                >
                  <input
                    type="hidden"
                    name="_token"
                    value="ygzP2hSxTrtdGCSte40LnI6hKNLUj2X49ItGjSum"
                    autocomplete="off"
                  />
                  <!-- Input Card -->
                  <div class="input-card input-card-sm mb-3">
                    <div class="input-card-form">
                      <label
                        for="subscribeForm"
                        class="form-label visually-hidden"
                        >Votre adresse mail</label
                      >
                      <input
                        type="email"
                        name="emailNewsletter"
                        class="form-control form-control-lg"
                        id="subscribeForm"
                        placeholder="Votre adresse mail"
                        aria-label="Votre adresse mail"
                      />
                    </div>
                    <button
                      type="submit"
                      class="btn btn-primary btn-lg"
                      id="heroNameAddOn"
                    >
                      Souscrire
                    </button>
                  </div>
                  <!-- End Input Card -->
                  <h5 id="message-newsletter" classe="d-none"></h5>
                </form>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- SVG Shape -->
            <figure
              class="position-absolute bottom-0 start-0 zi-n1 ms-n10 mb-n10"
              style="width: 15rem"
            >
              <img
                class="img-fluid"
                src="front/assets/svg/components/left.png"
                alt="Image Description"
              />
            </figure>
            <!-- End SVG Shape -->
          </div>
        </div>
      </div>

@endsection
