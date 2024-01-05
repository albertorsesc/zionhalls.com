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

    @if (!session()->has('cookieConsent'))
        <div class="flex justify-end">
            <div id="cookieConsentBanner" class="items-center fixed bottom-0 p-4 text-center rounded-2xl shadow-pink-800 border border-purple-600" style="display: none;">
                <div class="text-start">
                    <p class="text-gray-400">This site uses cookies to improve your experience.</p>
                    <p class="mb-3 text-gray-400">By continuing to use this site, you accept our use of cookies.</p>
                </div>
                <button onclick="acceptCookies()" class="mr-2 px-2 py-1 text-gray-500 text-start rounded-lg bg-gray-800 border border-gray-600 hover:bg-gray-700">Accept</button>
                <button onclick="closeBanner()" class="px-2 py-1 text-gray-500 text-start rounded-lg bg-gray-800 border border-gray-600 hover:bg-gray-700">Decline</button>
            </div>
        </div>
    @endif
</div>

<script>
    window.onload = function() {
        if (!localStorage.getItem('cookieConsent') || localStorage.getItem('cookieConsent') === 'false') {
            document.getElementById('cookieConsentBanner').style.display = 'block';
        }
    }

    function acceptCookies() {
        localStorage.setItem('cookieConsent', 'true');
        document.getElementById('cookieConsentBanner').style.display = 'none';
    }

    function closeBanner() {
        localStorage.setItem('cookieConsent', 'false');
        document.getElementById('cookieConsentBanner').style.display = 'none';
    }
</script>
</body>
</html>
