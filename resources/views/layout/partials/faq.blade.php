
  <section class="faq-section style-service p-t-120 p-b-240" id="faq"
      style="background-image: url(assets/img/bg/why-us-bg-3.webp)">
      <div class="container">
          <div class="row faq">
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="common-subtitle">
                      <img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}">
                      <span>Questions &amp; Réponses</span>
                  </div>
                  <div class="common-title text-start">
                      <h2>Foire Aux Questions <span>?</span></h2>
                  </div>
                  <div class="text">
                      <p>Vous avez des questions sur nos activités, nos formations ou notre mission ? Consultez cette
                          section ou contactez-nous directement.</p>
                  </div>
                  <div class="blog-btn">
                      <a class='e-primary-btn has-icon' href='{{ route('contact') }}'>
                          Vous avez une autre question ?
                          <span class="icon-wrap">
                              <span class="icon">
                                  <i class="fa-regular fa-arrow-right"></i>
                                  <i class="fa-regular fa-arrow-right"></i>
                              </span>
                          </span>
                      </a>
                  </div>
                  <div class="top-right">
                      <img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
                      <div class="people-joined">
                          <h5>{{ $faqs->count() }}</h5><span>Personnes ont participé</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 offset-xl-1" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  <div class="accordion faq-accordion" id="accordionFlushExample">
                      @foreach ($faqs as $index => $faq)
                          <div class="accordion-item">
                              <h4 class="accordion-header" id="heading-{{ $index }}" style="font-size:16px">
                                  <button class="accordion-button @if ($index !== 0) collapsed @endif"
                                      type="button" data-bs-toggle="collapse"
                                      data-bs-target="#flush-collapse-{{ $index }}"
                                      aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                      aria-controls="flush-collapse-{{ $index }}">
                                      <span class="accordion-title">{{ $loop->iteration }}.</span>
                                      {{ $faq->question }}
                                      <span class="icon ms-auto">
                                          <span class="icon-plus"></span>
                                          <span class="icon-minus"></span>
                                      </span>
                                  </button>
                              </h4>
                              <div id="flush-collapse-{{ $index }}"
                                  class="accordion-collapse collapse @if ($index === 0) show @endif"
                                  aria-labelledby="heading-{{ $index }}"
                                  data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                      {!! nl2br(e($faq->answer)) !!}
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>

