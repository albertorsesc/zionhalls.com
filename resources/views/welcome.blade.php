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
</head>
<body class="font-sans antialiased">

<div class="bg-gray-900" v-cloak>

    @include('partials.header')

    <main>
        @include('partials.hero')

        @include('partials.features')

        @include('partials.stats')

        @include('partials.cta')
    </main>

    @include('partials.footer')
</div>

</body>
</html>
