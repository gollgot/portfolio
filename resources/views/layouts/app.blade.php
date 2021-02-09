<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Portfolio Loïc</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>

        <!-- Switch Languages -->
        <div class="text-right mt-4 mr-4 mb-20 font-light">
            <a class="{{ App::getLocale() != 'fr' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'en') }}">EN</a> | <a class="{{ App::getLocale() == 'fr' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'fr') }}">FR</a>
        </div>

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        <footer class="bg-bordeaux pt-20 pb-10">
            <div class="container mx-auto text-center text-white font-light">

                <!-- Links -->
                <div class="flex justify-center mb-8">
                    <a class="footer-link mr-4" href="https://github.com/gollgot" target="_blank" title="Github">
                        <i class="fab fa-github"></i>
                    </a>

                    <a class="footer-link ml-4" href="https://linkedin.com/in/loïc-dessaules-44232b1b1/" target="_blank" title="Linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

                <!-- Copyrights -->
                <span>{{ __('pages.footer.copyrights') }} © {{ now()->year }}</span>

            </div>
        </footer>

    </body>
</html>
