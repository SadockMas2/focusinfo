<footer class="main-footer">
    <div class="container">
        <div class="footer-cards row justify-content-center">

            <!-- Support / Contact -->
            <div class="col-md-4">
                <div class="card-footer ">
                    <h4  class="footer-widget-title">Besoin d'aide ?</h4>
                    <p>Appelez 24h/24 et 7j/7 pour toute assistance :</p>
                    <p class="footer-contact" style="color:#ffa500;">📞 +243 998 258 517</p>
                    <p>Envoyez un e-mail à notre équipe de support :</p>
                    <p class="footer-contact">✉️ <a href="mailto:mukengerej@gmail.com" style="color:#ffa500;">mukengerej@gmail.com</a></p>
                    <ul class="footer-social">
                        <li><a href="{{ $settings->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $settings->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $settings->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a style="margin-bottom: 10px;" href="{{ $settings->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- À propos -->
            <div class="col-md-4">
                <div class="card-footer">
                    <h4 class="footer-widget-title">À propos de nous</h4>
                    <p>Focusinfos.org est un média en ligne, couvrant les actualités nationales et internationales si nécessaire. Il tient sur le respect des normes journalistes et surtout sur l'éthique et de la déontologie du métier, pour atteindre ses objectifs.</p>
                </div>
            </div>

            <!-- Adresse -->
            <div class="col-md-4">
                <div class="card-footer">
                    <h4 class="footer-widget-title">Adresse</h4>
                    <p>Goma, boulevard Kanyamuhanga, immeuble Atlas</p>
                </div>
            </div>

        </div>
    </div>

     <div class="to-top"> <i class="fas fa-caret-up"></i></div>
    <div class="footer-bottom">
        <div class="container text-center">
            <p style="text-align: center;">&copy; {{ date('Y') }} Focusinfos.org. Designed by <a href="https://www.kivusoft.net">Kivusoft Technologies</a>. Tous droits réservés.</p>
           
        </div>
    </div>
</footer>

