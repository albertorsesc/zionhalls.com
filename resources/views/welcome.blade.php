<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zion Halls | Enter Zion</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/js/app.ts', 'resources/css/app.css'])

    @production
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6EM7DHR3SF"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-6EM7DHR3SF');
        </script>
    @endproduction
</head>
<body class="font-sans antialiased">

<div class="bg-gray-900 scroll-smooth" v-cloak>

    @include('partials.header')

    <main class="snap-y scroll-smooth">
        @include('partials.hero')

        @include('partials.features')

        @include('partials.stats')

        @include('partials.cta')

        @include('partials.footer')
    </main>
</div>

</body>
</html>
