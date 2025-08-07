@extends('layout.base')
@section('title', 'A propos')

@section('parent_url', route('about'))


@section('page_title', 'A propos de nous')
@section('active_page_desc', 'Découvrez nos missions et visions')
@section('content')
    @include('layout.partials.banner')
    @include('layout.partials.about')
    @include('layout.partials.domaines')
    @include('layout.partials.counter')
    @include('layout.partials.valeurs')
    <div style="height:80px"></div>
    @include('layout.partials.faq')
    @include('layout.partials.objectifs')
    @include('layout.partials.partner')
    <div style="height:80px"></div>


@endsection
