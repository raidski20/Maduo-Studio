<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/maduo-transparent-logo.svg') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="apple-mobile-web-app-title" content="Maduo Studio" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="author" content="Developed by Boulahdid Raid" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:site_name" content="Maduo Studio" />

    @yield('seo_meta_data')

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
