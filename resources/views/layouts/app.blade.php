<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>

    <div class="float-right mt-4 mr-4">
        <a href="{{ route(Route::currentRouteName(), 'en') }}">EN</a> | <a href="{{ route(Route::currentRouteName(), 'fr') }}">FR</a>
    </div>


    <h1>{{ __('pages.title') }}</h1>
    </body>
</html>
