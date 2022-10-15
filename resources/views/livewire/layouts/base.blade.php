<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Theo</title>
    {{-- Tailwind --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Alphine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- jquery --}}
    {{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script> --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    {{-- Flowbite --}}
    @stack('head')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</head>

<body class="antialiased ">
    @yield('main-base')


    <livewireScripts />
    @stack('scripts')
</body>

</html>
