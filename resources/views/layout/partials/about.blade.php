<div class="overflow-hidden content-space-t-1">
    <div class="container">
        <div class="bg-dark rounded-3 p-4 p-sm-8 p-lg-10 mx-md-n7 mx-lg-n10">
            <div class="row align-items-lg-center">
                <div class="col-lg-7 order-lg-2 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <div class="w-75 ms-auto">
                            <img class="img-fluid rounded-3" src="{{ asset('storage/' . $settings->photo_1) }}"
                                alt="{{ $settings->site_name }}">
                        </div>

                        <div class="position-absolute bottom-0 start-0 mb-10 ms-5">
                            <img class="img-fluid w-75 shadow rounded-3"
                                src="{{ asset('storage/' . $settings->photo_2) }}" alt="{{ $settings->site_name }}">
                        </div>

                        <!-- SVG Shape -->
                        <figure class="position-absolute top-0 end-0 mt-n7 me-n7" style="width: 10rem;">
                            <img class="img-fluid" src="{{ 'assets/svg/components/dots-warning.svg' }}"
                                alt="{{ $settings->site_name }}">
                        </figure>
                        <!-- End SVG Shape -->
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-lg-5">
                    <div class="pe-lg-5">
                        <div class="mb-5">
                            <h2 class="text-white">A Propos de Nous</h2>
                            <p class="text-white-70" style="text-align:justify" id="about-text">
                                {{ $settings->apercu }}
                            </p>
                            <p class="text-white-70" style="text-align:justify; display:none;" id="full-about-text">
                                {{ $settings->apercu }}
                            </p>
                        </div>

                        <a class="btn btn-primary btn-pointer" id="read-more-btn" href="javascript:void(0)">Lire
                            plus</a>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutText = document.getElementById('about-text');
        const fullAboutText = document.getElementById('full-about-text');
        const readMoreBtn = document.getElementById('read-more-btn');

        // Cache le texte complet initialement
        fullAboutText.style.display = 'none';

        readMoreBtn.addEventListener('click', function() {
            if (fullAboutText.style.display === 'none') {
                // Affiche tout le texte
                aboutText.style.display = 'none';
                fullAboutText.style.display = 'block';
                readMoreBtn.textContent = 'Voir moins';
            } else {
                // Cache le texte complet
                aboutText.style.display = 'block';
                fullAboutText.style.display = 'none';
                readMoreBtn.textContent = 'Lire plus';
            }
        });
    });
</script>
