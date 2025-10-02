  <header class="main-header">
                <!-- top bar -->
                <div class="top-bar fl-wrap">
                    <div class="container">
                        <div class="date-holder">
                            <span class="date_num"></span>
                            <span class="date_mounth"></span>
                            <span class="date_year"></span>
                        </div>
                        <div class="header_news-ticker-wrap">
                            <div class="hnt_title">Nouvelles :</div>
                            <div class="header_news-ticker fl-wrap">
                                @php
                                    $articles=\App\Models\Article::published()
                                    ->paginate(5);
                                @endphp
                                <ul>
                                    @foreach ($articles as $article)
                                    <li><a href="{{ route('blog_detail',$article->slug) }}">{{ Str::limit($article->title, 60,'...') }}</a></li>

                                    @endforeach


                                </ul>
                            </div>
                            <div class="n_contr-wrap">
                                <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                                <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                        <ul class="topbar-social">
                            <li><a href="{{ $settings->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $settings->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $settings->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $settings->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ $settings->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- top bar end -->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <!-- logo holder  -->
                        <a href="{{ '/' }}" class="logo-holder"><img src="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}" style="height:80px; margin-top:-20px" alt=""></a>
                        <!-- logo holder end -->
                        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
                        {{-- <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</span></div> --}}
                        <!-- header-search-wrap -->
            <div class="header-search-wrap novis_sarch">
                <div class="widget-inner">
                    <form action="{{ route('blog.search') }}" method="GET">
                        <input name="query" id="se" type="text" class="search" placeholder="Search..." value="{{ request('query') }}" />
                        @if(isset($category))
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                        @endif
                        <button type="submit" class="search-submit" id="submit_btn">
                            <i class="fa fa-search transition"></i>
                        </button>
                    </form>
                </div>
            </div>

                           <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                       <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                                            Accueil
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">Catégories <i class="fas fa-caret-down"></i></a>
                                        <ul>
                                            @foreach($categories as $cat)
                                            
                                                <li><a href="{{ route('blog.category', $cat) }}">{{ $cat->name }}</a></li>
                                            @endforeach
                                        </ul>

                                    </li>

                                    <li>
                                        <a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">
                                            Actualités
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">Galeries <i class="fas fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="{{ url('galerie') }}" class="{{ request()->is('galerie') ? 'active' : '' }}">Photos</a></li>
                                            <li><a href="{{ url('video') }}" class="{{ request()->is('video') ? 'active' : '' }}">Vidéos</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                                                <!-- navigation  end -->
                    </div>
                </div>
            </header>
