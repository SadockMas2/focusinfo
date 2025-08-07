@extends('layout.base')
@section('title', 'Devenir Benevole')
@section('active_page', 'Devenir Bénévole')
@section('active_page_desc', 'Devenir Bénévole')
@section('content')
    <main>
        {{-- @include('layout.partials.banner') --}}

        <section class="work-process p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80">
            <div class="container">
                <div class="text-center m-b-50 m-b-xs-40">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <img alt="icon" src="assets/img/icons/icon-2.svg"> <span>Devenir Benevole</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Rejoignez notre Equipe des Bénévoles maintenant!</h2>
                    </div>
                </div>
                <div class="row row-gap-4 row-gap-md-5">
                    <div class="col-xl-7">
                        <div class="work-process-cards" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            @php
                                $n = 1;
                            @endphp
                            @foreach ($values as $value)
                                <div class="work-process-card">
                                    <div class="card-top">
                                        <img alt="shape" src="{{ asset('assets/img/shapes/shape-37.webp') }}">
                                        <div class="number">
                                            <h4>0{{ $n++ }}</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h4 style="line-height:25px">{{ $value->title }}</h4>
                                        <p>{{ $value->description }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="contact-form-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                            <div class="form-content">
                                <h3>Volontariat</h3>
                                <p>Completer ce formulaire pour rejoindre notre Equipe des Volontaires</p>
                                <form>
                                    <div class="mb-3">
                                        <input class="form-control" id="exampleFormControlInput1" placeholder="Noms"
                                            name="noms" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" id="exampleFormControlInput2" placeholder="Email"
                                            type="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" id="exampleFormControlInput3" placeholder="Telephone"
                                            name="phonenumber" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message..." name="message" rows="4"></textarea>
                                    </div><button class="e-primary-btn has-icon is-hover-white" type="submit">S'enregister
                                        <span class="icon-wrap"><span class="icon"><i
                                                    class="fa-regular fa-arrow-right"></i> <i
                                                    class="fa-regular fa-arrow-right"></i></span></span></button>
                                </form>
                                <img alt="shape-5" src="{{ asset('assets/img/shapes/shape-5.webp') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('layout.partials.contact')

    </main>
@endsection
