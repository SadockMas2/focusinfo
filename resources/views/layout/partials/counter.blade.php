<!-- Stats -->

<div class="bg-dark">
    <div class="container content-space-1 text-light">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-9 mb-lg-0">
                <div class="mb-6">
                    <h2 class='text-light'>Notre Impact</h2>
                    <p class='text-light'>Découvrez l'impact tangible d'EITPN à travers des chiffres clés, témoins de
                        notre
                        engagement pour une agriculture durable et innovante.</p>
                </div>

                <!-- Blockquote -->
                <figure>
                    <blockquote class="blockquote text-light"><em>EITPN œuvre en culture maraîchère, pisciculture,
                            apiculture
                            et élevage dans le territoire de Rutshuru, pour une agriculture durable, locale et
                            économiquement rentable.</em></blockquote>

                    @if ($benevoles->isNotEmpty())
                        <figcaption class="blockquote-footer">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="avatar avatar-circle"
                                        src="{{ asset('storage/' . $benevoles->first()->photo) }}"
                                        style="height:50px; object-fit:cover" alt="{{ $benevoles->first()->noms }}">
                                </div>
                                <div class="flex-grow-1 ms-3 text-light">
                                    {{ $benevoles->first()->noms }}
                                    <span
                                        class="blockquote-footer-source text-light">{{ $benevoles->first()->fonction }}</span>
                                </div>
                            </div>
                        </figcaption>
                    @endif
                </figure>
                <!-- End Blockquote -->
            </div>
            <!-- End Col -->

            <div class="col-lg-6">
                <!-- List -->
                <ul class="list-equal-height list-equal-height-2-cols">
                    @foreach ($counters as $counter)
                        <li class="list-equal-height-item">
                            <h4 class="display-5 text-light">{{ $counter->value }}+</h4>
                            <p class="mb-0 text-light">{{ $counter->name }}</p>
                        </li>
                    @endforeach
                </ul>
                <!-- End List -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
</div>



<!-- End Stats -->
