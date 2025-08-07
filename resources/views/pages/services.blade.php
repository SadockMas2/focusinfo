@extends('layout.base')
@section('title', 'Domaines d\'intervention')

@section('content')
    <!-- breadcrumb-section start - version simplifiée -->
    <section class="breadcrumb-section bg-gradient-to-r from-blue-900 to-blue-700 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="text-center md:text-left">
                <nav class="mb-4" aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <ol class="flex justify-center md:justify-start space-x-2 text-white/80">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Accueil</a></li>
                        <li>/</li>
                        <li><a href="#" class="hover:text-white transition">Services</a></li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    Nos Domaines d'Expertise
                </h1>
                <div class="w-20 h-1 bg-cyan-400 mx-auto md:mx-0 mb-6" data-aos="fade-up" data-aos-delay="600"></div>
                <p class="text-white/90 max-w-2xl mx-auto md:mx-0" data-aos="fade-up" data-aos-delay="800">
                    Découvrez nos spécialisations pour des solutions digitales sur mesure
                </p>
            </div>
        </div>
    </section>
    <!-- breadcrumb-section end -->

    <!-- services-section start -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <span class="text-blue-600 font-semibold tracking-wider block mb-2" data-aos="fade-up" data-aos-delay="200">
                    Domaines
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up" data-aos-delay="400">
                    Nos Interventions
                </h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto" data-aos="fade-up" data-aos-delay="600"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="800">
                @foreach ($domains as $domain)
                    <div
                        class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-full">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $domain->image) }}" alt="{{ $domain->name }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                loading="lazy">
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $domain->name }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $domain->description }}</p>
                            <a href="#"
                                class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition">
                                En savoir plus
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
