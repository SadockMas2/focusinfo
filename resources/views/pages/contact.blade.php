@extends('layout.base')
@section('title', 'Contacts')
@section('page_title', 'Contacts')
@section('active_page', 'Contacts')


@section('content')

    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!--section   -->
            <section class="hero-section">
                <div class="bg-wrap hero-section_bg">
                    <div class="bg" data-bg="images/bg/8.jpg"></div>
                </div>
                <div class="container">
                    <div class="hero-section_title">
                        <h2>Contactez-nous</h2>
                        <h1> <a href="/">Acceuil /</a> <span>Contact</span></h1>
                    </div>
{{--                  
                    <div class="scroll-down-wrap scw_transparent">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll Down To Discover</span>
                    </div> --}}
                </div>

            </section>
            <!-- section end  -->
            <!--section   -->
            <section>
                <div class="container">
                    <div class="pr-subtitle prs_big">Avez-vous une question ?</div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="pad-con fl-wrap">
                               <div class="pr-subtitle br">
                                    Laissez-nous un message
                                    <p>
                                        Nous sommes à votre disposition pour répondre à toutes vos questions ou préoccupations.
                                        N'hésitez pas à nous laisser un message et nous vous répondrons dans les plus brefs délais.
                                        Votre satisfaction est notre priorité
                                    </p>
                                </div>

    
                                    <div id="contact-form" style="margin-top: 20px;">
                                        <div id="message"></div>
                                            <form class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <input type="text" name="name" id="name" placeholder="Votre nom complet *"
                                                        value="" />
                                                    <input type="text" name="email" id="email" placeholder="Votre adresse mail*"
                                                    value="" />
                                                    <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Message:"></textarea>
                                                </fieldset>
                                                    <button class="btn   color-bg float-btn" id="submit">Envoyez le message<i
                                                    class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    <!-- contact form  end-->



                        <div class="col-md-4">
                            <div class="pr-subtitle br">Details du contact</div>
                            <!--card-item -->
                            <ul class="contacts-list fl-wrap">
                                <li><span><i class="fal fa-phone"></i> Assistance tétéphonique  :</span> <a style="color:blue;" href="#">+243 998 258 517</a>
                                </li>
                                <li><span><i class="fal fa-envelope"></i> Email de support :</span> <a style="color:blue;" href="mukengerej@gmail.com">mukengerej@gmail.com</a></li>
                                
                                <li><span><i class="fal fa-clock"></i> Heures de contact :</span> <a style="color:blue;"
                                        href="#">Lun-Dim : 24 heures</a></li>
                            </ul>
                            <!--card-item end -->
                            <div class="contact-social fl-wrap">
                                <span style="font-size: 16px;" class="cs-title">Trouvez-nous sur: </span>
                                <ul>
                                  <li><a href="{{ $settings->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $settings->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $settings->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $settings->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- box-widget -->
                            {{-- <div class="box-widget-content fl-wrap">
                                <div class="banner-widget fl-wrap">
                                    <div class="bg-wrap bg-parallax-wrap-gradien">
                                        <div class="bg  " data-bg="images/bg/6.jpg"></div>
                                    </div>
                                    <div class="banner-widget_content">
                                        <h5>Visit our awesome merch and souvenir online shop.</h5>
                                        <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- box-widget  end -->
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>

    @endsection
