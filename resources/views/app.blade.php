<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')Mollet Architectes</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/bf8f37f6e5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="site-header">
        <div class="grid-container">
            <div class="top-bar align-top">
                <div class="top-bar-left">
                    <ul class="no-bullet">
                        <li><a href="{{ route('welcome') }}">Henri Mollet</a></li>
                        <li><a href="{{ route('welcome') }}">Chemin de la Pierre-Grise 1</a></li>
                        <li><a href="{{ route('welcome') }}">2502 Biel/Bienne</a></li>
                        <li><a href="tel:+41323238067">T 032 323 80 67</a></li>
                        <li><a style="text-decoration: underline" href="mailto:henrimollet53@gmail.com">e-mail</a></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu simple">
                        <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                        <li><a href="{{ route('competitions') }}">Concours</a></li>
                        <li><a href="{{ route('office') }}">Bureau</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
    </footer>
</body>

</html>
