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

        <title>{{ config('app.name', 'Escola Cristã Genebra') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-DkiSnJ36.css') }}">
    </head>
    <body class="relative font-sans antialiased">
        <div class="min-h-screen bg-gray-400 _dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow-lg _dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="{{ asset('build/assets/app-CEsE5a7F.js') }}"></script>
    </body>
</html>
