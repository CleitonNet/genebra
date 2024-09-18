<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website" /> <!-- TIPO DE ARQUIVO -->
    <meta property="og:url" content="https://www.escolagenebra.com.br/" /> <!-- ENDEREÇO DO SITE -->
    <meta property="og:title" content="Escola Cristã Genebra" /> <!-- TITULO DO ARQUIVO -->
    <meta property="og:image" content="{{ asset('img/logo.png') }}" /><!-- IMAGEM DE REFERENCIA DO SITE -->
    <meta property="og:description" content="Uma escola que nasceu para glória de Deus." /> <!-- DESCRIÇÃO DO SITE -->

    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('img/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title>@isset($page) {{ $page }} - @endisset {{ config('app.name', 'Escola Cristã Genebra :: Trilingue') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('build/assets/guest-gsh_-YuR.css') }}">
    {{-- @vite(['resources/css/guest.css', 'resources/js/guest.js']) --}}
    @stack('head')

    <!-- Meta Pixel Code -->
    <script> ! function(f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '998240424750871'); fbq('track', 'PageView'); </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=998240424750871&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body class="font-sans scroll-smooth">
    <x-navigation />

    {{ $slot }}

    <x-whatsapp />
    <x-footer />

    <script defer src="{{ asset('build/assets/guest-Bda1Trt8.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    @stack('footer')

</body>
</html>
