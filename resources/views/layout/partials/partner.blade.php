<!-- Clients -->
<div class="container content-space-1">
  <!-- Heading -->
  <div class="w-lg-75 text-center mx-lg-auto mb-10">
    <h2>Ils nous font confiance</h2>
  </div>
  <!-- End Heading -->

  <div class="row justify-content-center text-center">
   @foreach ($partners as $partner)
    <div class="col-4 col-sm-3 col-md-2 py-3">
      <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="{{'storage/'.$partner->logo}}" alt="{{$partner->name}}">
    </div>
       
   @endforeach
   
  <!-- End Row -->
</div>
<!-- End Clients -->