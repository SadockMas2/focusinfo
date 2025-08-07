  <div class="overflow-hidden content-space-t-2 content-space-t-lg-3">
      <div class="container position-relative content-space-2 content-space-lg-3">
          <div class="row">
              <div class="col-lg-5 align-self-lg-end mb-7 mb-lg-0">
                  <h2>Nos Valeurs</h2>
                  <div class="d-none d-lg-flex justify-content-center mt-7" style="width: 15rem;">
                      <img class="img-fluid" src="assets/svg/illustrations/plane.svg" alt="Image Description">
                  </div>
              </div>
              <!-- End Col -->

              <div class="col-lg-7 align-self-lg-center">
                  <div class="row">
                      @foreach ($valeurs as $valeur)
                          <div class="col-lg-6 mb-4">
                              <!-- Card -->
                              <div class="card card-shadow h-100">
                                  <div class="card-body">
                                      <div class="mb-3">
                                          {!! $valeur->icon !!}
                                      </div>
                                      <h4>{{ $valeur->title }}</h4>
                                      <p class="mb-0">{{ $valeur->description }}</p>
                                  </div>
                              </div>
                              <!-- End Card -->
                          </div>
                      @endforeach

                  </div>
                  <!-- End Row -->
              </div>
              <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="position-absolute top-0 start-0 w-100 w-lg-65 h-65 h-lg-100 bg-light rounded-3 zi-n1 ms-n5"></div>
      </div>
  </div>
