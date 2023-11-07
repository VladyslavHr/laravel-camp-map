<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Camp-map') }}</title>

    {{-- <meta name="keywords" content="@yield('keywords', 'ферма', 'мясо', 'органіка', 'томати', 'яйця')">
    <meta name="description" content="@yield('description', 'Oblíbená půjčovna obytných vozů Praha. Pronájem obytných aut rok výroby 2021 - 2022 s neomezeným nájezdem km. Jsme top půjčovna obytných vozů Praha. TopObytneVozy.cz - Praha')"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="Vladyslav Hrebennikov">

    {{-- <link rel="apple-touch-icon" sizes="180x180" href="/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/logo/favicon-16x16.png">
    <link rel="manifest" href="/logo/site.webmanifest">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple"> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <link rel="stylesheet" href="{{ asset ('css/main.css?v=' . filemtime(public_path('css/main.css')) ) }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body>
        @include('layouts.header')
        <main class="main-body">
            @yield('content')
            {{-- <a href="#" id="to_top" class="top-link" onchange="scroll()">Jump to top of page</a> --}}
        </main>
        @include('layouts.footer')
    {{-- </div> --}}
{{--
    @if (auth()->user())


    <a href="{{ route('checkout.index') }}" class="cart-link-main {{ Cart::isEmpty('d-none') }}"
    id="fixed_cart_link">
        <i class="bi bi-cart-check"></i>
        KOŠIK <b class="cart-count">{{ Cart::getTotalCount() }}</b>
    </a>
    @endif --}}



    {{-- @if($errors->any())
    @foreach($errors->all() as $error)
            <input type="hidden" class="form-error" value="{{ $error }}">
    @endforeach
    <script>
        $(function(){
            $('.form-error').each(function() {
                var error_message = $(this).val()
                toastr.error(error_message)
            })
        })
    </script>
    @endif --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <script src="{{ asset ('js/main.js?v=' . filemtime(public_path('js/main.js')) ) }}"></script>

</body>
</html>
