          
          <div class="gray-bg ad-wrap fl-wrap">
               <div class="content-banner-wrap">
                   <img src="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}" style="height:80px"
                       class="respimg" alt="">
               </div>
           </div>
           <!-- section end -->
           </div>
           <!-- content  end-->


           <!-- footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="footer-cards row justify-content-center">

                    <!-- Support / Contact -->
                    <div class="col-md-3">
                        <div class="card-footer">
                            <h4 class="footer-widget-title">Besoin d'aide ?</h4>
                            <p>Appelez 24h/24 et 7j/7 pour toute assistance :</p>
                            <p class="footer-contact" style="color:#ffa500;">📞 +243 998 258 517</p>
                            <p>Envoyez un e-mail à notre équipe de support :</p>
                           <p class="footer-contact">✉️ <a href="mailto:mukengerej@gmail.com" style="color:#ffa500;">mukengerej@gmail.com</a></p>
                            <ul class="footer-social">
                                <li><a href="{{ $settings->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $settings->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $settings->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $settings->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- À propos -->
                    <div class="col-md-3">
                        <div class="card-footer">
                            <h4 class="footer-widget-title">À propos de nous</h4>
                            <p>Focusinfos.org est un média en ligne, couvrant les actualités nationales et internationales si nécessaire. Il tient sur le respect des normes journalistes et surtout sur l'éthique et de la déontologie du métier, pour atteindre ses objectifs.</p>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class="col-md-3">
                        <div class="card-footer">
                            <h4 class="footer-widget-title">Adresse</h4>
                            <p>Goma, boulevard Kanyamuhanga, immeuble Atlas</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="container text-center">
                    <p>&copy; {{ date('Y') }} Focusinfos.org. Designed by <a href="https://www.kivusoft.net">Kivusoft Technologies</a>. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
           <!-- footer end-->





           {{-- <div class="aside-panel">
               <ul>
                   <li> <a href="#"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                   <li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>
                   <li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                   <li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                   <li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>
               </ul>
           </div> --}}
           </div>
           <!-- wrapper end -->
           <!-- cookie-info-bar -->
           {{-- <div class="cookie-info-bar">
        <div class="container">
            <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our
                use of cookies: <a href="#">Cookie policy</a></div>
            <a href="#" class="sicb_btn color-bg">Accept</a>
            <a href="#" class="sicb_btn">Reject</a>
        </div>
    </div> --}}
           <!-- cookie-info-bar end -->
           <!--register form -->
           <div class="main-register-container">
               <div class="reg-overlay close-reg-form"></div>
               <div class="main-register-holder">
                   <div class="main-register-wrap fl-wrap">
                       <div class="main-register_bg">
                           <div class="bg-wrap">
                               <div class="bg par-elem " data-bg=""></div>
                               <div class="overlay"></div>
                           </div>
                           <div class="mg_logo"><img src="#" alt=""></div>
                       </div>
                       <div class="main-register tabs-act fl-wrap">
                           <ul class="tabs-menu">
                               <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a>
                               </li>
                               <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                           </ul>
                           <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                           <!--tabs -->
                           <div id="tabs-container">
                               <div class="tab">
                                   <!--tab -->
                                   <div id="tab-1" class="tab-content first-tab">
                                       <div class="custom-form">
                                           <form method="post" name="registerform">
                                               <label>Username or Email Address <span>*</span> </label>
                                               <input name="email" type="text" onClick="this.select()"
                                                   value="">
                                               <label>Password <span>*</span> </label>
                                               <input name="password" type="password" onClick="this.select()"
                                                   value="">
                                               <div class="filter-tags">
                                                   <input id="check-a" type="checkbox" name="check" checked>
                                                   <label for="check-a">Remember me</label>
                                               </div>
                                               <div class="lost_password">
                                                   <a href="#">Lost Your Password?</a>
                                               </div>
                                               <div class="clearfix"></div>
                                               <button type="submit" class="log-submit-btn color-bg"><span>Log
                                                       In</span></button>
                                           </form>
                                       </div>
                                   </div>
                                   <!--tab end -->
                                   <!--tab -->
                                   <div class="tab">
                                       <div id="tab-2" class="tab-content">
                                           <div class="custom-form">
                                               <form method="post" name="registerform" class="main-register-form"
                                                   id="main-register-form2">
                                                   <label>Full Name <span>*</span> </label>
                                                   <input name="name" type="text" onClick="this.select()"
                                                       value="">
                                                   <label>Email Address <span>*</span></label>
                                                   <input name="email" type="text" onClick="this.select()"
                                                       value="">
                                                   <label>Password <span>*</span></label>
                                                   <input name="password" type="password" onClick="this.select()"
                                                       value="">
                                                   <button type="submit"
                                                       class="log-submit-btn color-bg"><span>Register</span></button>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                   <!--tab end -->
                               </div>
                               <!--tabs end -->
                               <div class="log-separator fl-wrap"><span>or</span></div>
                               <div class="soc-log  fl-wrap">
                                   <p>For faster login or register use your social account.</p>
                                   <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
