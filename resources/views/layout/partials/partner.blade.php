<!-- Clients -->
{{-- <div class="bg-dark">
   
</div> --}}
<!-- End Clients -->

 <div class="container content-space-1">
        <!-- Heading -->
        <div class="w-lg-75 text-center mx-lg-auto mb-10">
            <h2 class="text-dark">Ils nous font confiance</h2>
        </div>
        <!-- End Heading -->

        <div class="row justify-content-center text-center">
            @foreach ($partners as $partner)
                <div class="col-4 col-sm-3 col-md-2 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="{{ 'storage/' . $partner->logo }}" style="height:100px; object-fit: contain;"
                        alt="{{ $partner->name }}">
                </div>
            @endforeach

            <!-- End Row -->
        </div>
    </div>
