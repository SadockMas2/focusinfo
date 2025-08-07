@extends('layout.base')
@section('title', 'Page Introuvable')
@section('content')
    <div class="container text-center">
        <div class="mb-4">
            <h1 class="display-1">404</h1>
            <h3 class="mb-1">Page non trouvée</h3>
            <p>La page que vous cherchez est introuvable!</p>
        </div>
        <a class="btn btn-primary" href="{{ route('acceuil') }}">Revenir à l'Acceuil</a>
    </div>

    <div style="height:150px"></div>
@endsection
