@extends('layout.base')
@section('title', 'A propos')
@section('parent_url', route('about'))

@section('page_title', 'A propos de nous')
@section('active_page_desc', 'Découvrez nos missions et visions')
@section('content')
    <div id="wrapper">

        <div class="content">
            <div id="wrapper">
                <!--section   -->
                <div class="breadcrumbs-header fl-wrap">
                    <div class="container">
                        <div class="breadcrumbs-header_url">
                            <a href="{{ '/' }}">Acceuil</a><span>A Propos</span>
                        </div>
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Decouvrez</span>
                        </div>
                    </div>
                    <div class="pwh_bg"></div>
                </div>
                <!-- section end  -->
                <!--section   -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="section-title sect_dec">
                                    <h2>Our Story</h2>
                                    <h4>Who we are</h4>
                                </div>
                                <div class="about-wrap">
                                    {!! $settings->history_content !!}
                                    @if ($settings->video_url)
                                        <a href="https://vimeo.com/225223404" class="btn float-btn color-btn image-popup">
                                            <span>Our
                                                Story Video</span> <i class="fas fa-caret-right"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <div class="about-img fl-wrap">
                                    <img src="{{ asset('storage/'.$settings->photo_1) }}" class="respimg" alt="">
                                    {{-- <div class="about-img-hotifer color-bg">
                                        <p>Your website is fully responsive so visitors can view your content from their
                                            choice
                                            of device.</p>
                                        <h4>Mark Antony</h4>
                                        <h5>Gmag CEO</h5>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sec-dec"></div>
                </section>
                <!--about end   -->
            </div>

        @endsection
