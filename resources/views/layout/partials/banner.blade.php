 <div class="d-flex bg-img-center"
     style="background: linear-gradient(rgba(26, 165, 8, 0.1), rgba(6, 105, 58, 0.6)), url('{{ asset('storage/'.$settings->banner_photo) }}'); background-size: cover; background-position: center;">

     <div class="container d-flex justify-content-end flex-column min-vh-lg-75 content-space-1 content-space-lg-b-3">
         <div class="w-lg-65">
            
             <h1 class="display-4 text-white">@yield('page_title',)</h1>
             <p class="lead text-white">@yield('active_page_desc','')</p>
         </div>
     </div>
 </div>
