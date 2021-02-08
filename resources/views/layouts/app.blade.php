<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>

        <!-- Languages -->
        <div class="float-right mt-4 mr-4 font-light">
            <a class="{{ App::getLocale() == 'en' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'en') }}">EN</a> | <a class="{{ App::getLocale() == 'fr' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'fr') }}">FR</a>
        </div>


        <h1>{{ __('pages.title') }}</h1>

    </body>
</html>
