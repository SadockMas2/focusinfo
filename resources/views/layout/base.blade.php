@include('layout.includes.head')

<body>


    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        @include('layout.includes.navbar')

        @yield('content')
        @include('layout.partials.footer')
</body>

@include('layout.includes.foot')
