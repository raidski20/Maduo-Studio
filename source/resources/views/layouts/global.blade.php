<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/maduo-transparent-logo.svg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('page_title')

    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
    ])

    @yield('css')
</head>

<body>
    @include('partials.global.navbar')

    @yield('content')

    @include('partials.global.footer')

    <script type="module">
        $(".navbar-copyright").html(`&copy;${(new Date).getFullYear()}.`);
    </script>

    @yield('js')
</body>
</html>
