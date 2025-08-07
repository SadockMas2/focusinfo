@extends('layout.base')
@section('content')
    @include('layout.partials.slider')
    <div style="height: 100px"></div>
    @include('layout.partials.about')
    <div style="height: 100px"></div>
    @include('layout.partials.valeurs')
    @include('layout.partials.domaines')
    <div style="height: 100px"></div>
    @include('layout.partials.counter')
    <div style="height: 100px"></div>
    
    @include('layout.partials.partner')
    <div style="height: 100px"></div>
    @include('layout.partials.newsletter')
    <div class="overflow-hidden">
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-1 content-space-b-lg-2">
            <div class="w-lg-50 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-1" style="margin-bottom:-20px;">
                    <h1 class="display-4">Nos Article</h1>
                    <p>Voici en articles nos dernières activités.</p>
                </div>
            </div>
            @include('layout.partials.blog')
        </div>
    </div>
  
   
@endsection
