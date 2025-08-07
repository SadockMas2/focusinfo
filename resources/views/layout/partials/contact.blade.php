 <section class="contact-info-section">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">

                 <div class="contact-info-layout">
                     <a class="contact-info active" href="mailto:{{ $settings->contact_email }}">
                         <div class="icon-wrap">
                             <div class="icon-shape"></div>
                             <div class="icon">
                                 <i class="fa-solid fa-paper-plane"></i>
                             </div>
                         </div>
                         <h3>{{ $settings->contact_email }}</h3>
                         <p>Envoyez un mail</p>
                     </a> <a class="contact-info" href="tel:{{ $settings->contact_phone }}">
                         <div class="icon-wrap">
                             <div class="icon-shape"></div>
                             <div class="icon">
                                 <i class="fa-solid fa-phone-arrow-up-right"></i>
                             </div>
                         </div>
                         <h3>{{ $settings->contact_phone }}</h3>
                         <p>Nous appeler</p>
                     </a> <a class="contact-info" href="#">
                         <div class="icon-wrap">
                             <div class="icon-shape"></div>
                             <div class="icon">
                                 <i class="fa-solid fa-location-dot"></i>
                             </div>
                         </div>
                         <h3>{{ $settings->address }}</h3>
                         <p>Notre adresse</p>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
