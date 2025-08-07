<header id="header" class="navbar navbar-expand-lg navbar-center navbar-light bg-white">
    <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="{{ route('acceuil') }}" aria-label=" {{ $settings->site_name }}">
                <img class="navbar-brand-logo" src="{{ asset('storage/' . $settings->logo) }}"
                    style="height:60px;object-fit: contain;" alt=" {{ $settings->site_name }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-default">
                    <i class="bi-list"></i>

                </span>
                <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-lg-6 me-lg-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('acceuil') }}">{{ __('messages.home') }}
                        </a>
                    </li>

                    <!-- Dropdown -->
                    <li class="hs-has-sub-menu nav-item">
                        <a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:;"
                            id="headerWithMegaMenuDropdown" aria-expanded="false">{{ __('messages.about') }}</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdown"
                            style="min-width: 12rem;">
                            <a class="dropdown-item" href="{{ route('about') }}">{{ __('messages.who_we_are') }}</a>
                            <a class="dropdown-item"
                                href="{{ route('about') }}#domaines-d-intervention">{{ __('messages.domaines') }}</a>
                            <a class="dropdown-item" href="{{ route('equipe') }}">Notre Equipe</a>
                            <a class="dropdown-item" href="{{ route('about') }}#objectifs">Nos Objectifs</a>
                            <a class="dropdown-item" href="{{ route('about') }}#faqs">FAQs</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('boutique') }}">Boutique</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="hs-has-sub-menu nav-item">
                        <a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:;"
                            id="headerWithMegaMenuDropdown" aria-expanded="false">Publications</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdown"
                            style="min-width: 12rem;">
                            <a class="dropdown-item" href="{{ route('blog') }}">Nos Articles</a>

                            <a class="dropdown-item" href="{{ route('rapports') }}">Nos Rapports</a>
                            <a class="dropdown-item" href="{{ route('galerie') }}">Notre Galerie</a>
                            <a class="dropdown-item" href="{{ route('videos') }}">Nos Vidéos</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Dropdown -->
                    <!-- Dropdown -->
                    <li class="hs-has-sub-menu nav-item">
                        <a class="hs-mega-menu-invoker nav-link dropdown-toggle" href="javascript:;"
                            id="headerWithMegaMenuDropdown" aria-expanded="false">Impliquez-vous</a>

                        <!-- Mega Menu -->
                        <div class="hs-sub-menu dropdown-menu" aria-labelledby="headerWithMegaMenuDropdown"
                            style="min-width: 12rem;">
                            <a class="dropdown-item" href="{{ route('contact') }}">Contactez-nous</a>
                            <a class="dropdown-item" href="{{ route('don') }}">Faites un Don</a>
                        </div>
                        <!-- End Mega Menu -->
                    </li>
                    <!-- End Dropdown -->

                    <li class="nav-item ms-lg-auto">
                        <div class="btn-group">
                            <a class="link link-light link-light-75" href="#" id="selectLanguage"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="{{ asset('img/flags/' . app()->getLocale() . '.png') }}" alt="Lang"
                                        width="16">
                                    <span class="navbar-dropdown-menu-media-title text-capitalize">
                                        {{ app()->getLocale() === 'fr' ? 'Français' : 'English' }}
                                    </span>
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                    href="{{ route('change_language', 'en') }}">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="{{ asset('img/flags/en.png') }}" alt="EN" width="16">
                                    <span class="navbar-dropdown-menu-media-title">English</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                                    href="{{ route('change_language', 'fr') }}">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="{{ asset('img/flags/fr.png') }}" alt="FR" width="16">
                                    <span class="navbar-dropdown-menu-media-title">Français</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- End Log in -->

                    <li class="nav-item ms-5">
                        <a class="btn btn-primary d-none d-lg-inline-block" href="{{ route('don') }}">Faites un
                            don</a>
                    </li>
                    <!-- End Sign up -->
                </ul>
            </div>
            <!-- End Collapse -->
        </nav>
    </div>
</header>
