  <div class="container content-space-t-3 content-space-t-lg-4">
      <div class="text-center mb-7">
          <h1 class="display-5">Contactez-nous</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
          <div class="col mb-4 mb-lg-0">
              <!-- Card -->
              <div class="card card-lg text-center h-100">
                  <div class="card-body">
                      <div class="mb-3">
                          <i class="bi-geo-alt fs-1 text-dark"></i>
                      </div>

                      <div class="mb-5">
                          <h4>Nos Adresses</h4>
                      </div>

                      <div class="mb-5">
                          <span class="d-block">Lundi-Vendredi</span>
                          <span class="d-block">08:00 - 18:00</span>
                      </div>

                      <div class="d-grid mb-3">
                          <a class="btn btn-white" href="{{ $settings->maps }}"><i class="bi-geo-alt me-2"></i>
                              Visitez-nous maintenant!</a>
                      </div>

                      <a class="btn btn-ghost-dark btn-sm" href="{{ $settings->maps }}"><i class="bi-geo-alt me-2"></i>
                          {{ $settings->address }}
                      </a>
                  </div>
              </div>
              <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col mb-4 mb-lg-0">
              <!-- Card -->
              <div class="card card-lg text-center h-100">
                  <div class="card-body">
                      <div class="mb-3">
                          <i class="bi-envelope-open fs-1 text-dark"></i>
                      </div>

                      <div class="mb-5">
                          <h4>Adresse Mail</h4>
                      </div>

                      <div class="mb-5">
                          <span class="d-block">Disponible</span>
                          <span class="d-block">Tous les jours</span>
                      </div>

                      <div class="d-grid mb-3">
                          <a class="btn btn-white" href="mailto:{{ $settings->contact_email }}"><i
                                  class="bi-envelope-open me-2"></i>Ecrivez-vous maintenant!
                          </a>
                      </div>

                      <a class="btn btn-ghost-dark btn-sm" href="mailto:{{ $settings->contact_email }}"><i
                              class="bi-envelope-open me-2"></i>
                          {{ $settings->contact_email }}</a>
                  </div>
              </div>
              <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col">
              <!-- Card -->
              <div class="card card-lg text-center h-100">
                  <div class="card-body">
                      <div class="mb-3">
                          <i class="bi-telephone fs-1 text-dark"></i>
                      </div>

                      <div class="mb-5">
                          <h4>Téléphone</h4>
                      </div>

                      <div class="mb-5">
                          <span class="d-block">Disponible</span>
                          <span class="d-block">tous les jours</span>
                      </div>

                      <div class="d-grid mb-3">
                          <a class="btn btn-white" href="tel:{{ $settings->contact_phone }}"><i
                                  class="bi-envelope-open me-2"></i> Appelez maintenant ! </a>
                      </div>

                      <a class="btn btn-ghost-dark btn-sm" href="tel:{{ $settings->contact_phone }}"><i
                              class="bi-telephone me-2"></i>
                          {{ $settings->contact_phone }}
                      </a>
                  </div>
              </div>
              <!-- End Card -->
          </div>
          <!-- End Col -->
      </div>
      <!-- End Row -->
  </div>
