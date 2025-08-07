@include('layout.includes.head')

<body>
    @include('layout.includes.navbar')
    <main id="content" role="main">
        @yield('content')
    </main>
</body>
@include('layout.includes.foot')
