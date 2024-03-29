<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title', __('main.office-full-name'))</title>
    <meta name="description"
    content="@yield('page-description', __('main.description-home'))">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/bf8f37f6e5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="site-header">
        <div id="mobile-navbar" class="hide-for-large" data-sticky-container>
            <div data-sticky data-options="marginTop:0; stickyOn:small">
                <div class="grid-container">
                    <div class="menu-small grid-x align-middle">
                        <div class="cell shrink">
                            <a href="{{ route('welcome') }}">@lang('main.office-full-name')</a>
                        </div>
                        <div class="cell auto text-right">
                            <button class="clear button text-lowercase" type="button" data-toggle="dropdown-menu">@lang('main.menu').</button>
                        </div>
                    </div>
                </div>
                <div id="dropdown-menu" data-toggler=".show">
                    <div class="grid-container">
                        <ul class="no-bullet text-lowercase">
                            <li><a href="{{ route('public-buildings') }}">@lang('main.public-buildings').</a></li>
                            <li><a href="{{ route('collective-housing') }}">@lang('main.collective-housing').</a></li>
                            <li><a href="{{ route('individual-housing') }}">@lang('main.individual-housing').</a></li>
                            <li><a href="{{ route('competitions') }}">@lang('main.competitions').</a></li>
                            <li><a href="{{ route('office') }}">@lang('main.office').</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="desktop-navbar" class="show-for-large">
            <div class="sticky-slider-wrapper">
                <div class="grid-container">
                    <div class="menu-small grid-x align-middle">
                        <a href="{{ route('welcome') }}">@lang('main.office-full-name')</a>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell large-6">
                        <ul class="contact no-bullet">
                            <li><a href="{{ route('welcome') }}">@lang('main.office-full-name')</a></li>
                            <li><a href="{{ route('welcome') }}">@lang('main.office-address')</a></li>
                            <li><a href="{{ route('welcome') }}">2502 Biel/Bienne</a></li>
                            <li><a href="tel:+41323238067">T 032 323 80 67</a></li>
                            <li><a style="text-decoration: underline" href="mailto:henrimollet53@gmail.com">e-mail</a></li>
                        </ul>
                    </div>
                    <div class="cell auto"></div>
                    <div class="cell large-3 xxlarge-2">
                        <ul class="no-bullet text-lowercase">
                            <li><a href="{{ route('public-buildings') }}">@lang('main.public-buildings').</a></li>
                            <li><a href="{{ route('collective-housing') }}">@lang('main.collective-housing').</a></li>
                            <li><a href="{{ route('individual-housing') }}">@lang('main.individual-housing').</a></li>
                            <li><a href="{{ route('competitions') }}">@lang('main.competitions').</a></li>
                            <li><a href="{{ route('office') }}">@lang('main.office').</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="site-footer" class="align-self-bottom">
        <div class="grid-container">
            <div class="grix-y grid-padding-y">
                <div class="cell">
                    <div class="localization">
                        <a rel="alternate" hreflang="fr_CH" href="{{ LaravelLocalization::getLocalizedURL('fr-CH', null, [], true) }}">fr</a>
                        <span>I</span>
                        <a rel="alternate" hreflang="de_CH" href="{{ LaravelLocalization::getLocalizedURL('de-CH', null, [], true) }}">de</a>
                    </div>
                </div>
                <div class="cell hide-for-large">
                    <ul class="contact no-bullet">
                        <li><a href="{{ route('welcome') }}">@lang('main.office-full-name')</a></li>
                        <li><a href="{{ route('welcome') }}">@lang('main.office-address')</a></li>
                        <li><a href="{{ route('welcome') }}">2502 Biel/Bienne</a></li>
                        <li><a href="tel:+41323238067">T 032 323 80 67</a></li>
                        <li><a style="text-decoration: underline" href="mailto:henrimollet53@gmail.com">e-mail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
