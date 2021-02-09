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
        <div class="text-right mt-4 mr-4 font-light">
            <a class="{{ App::getLocale() != 'fr' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'en') }}">EN</a> | <a class="{{ App::getLocale() == 'fr' ? 'font-bold' : '' }}" href="{{ route(Route::currentRouteName(), 'fr') }}">FR</a>
        </div>

        <!-- Hero Section -->
        <section class="text-center p-5 relative">
            <h1 class="text-4xl font-bold mt-20">{{ __('pages.home.heroSection.title') }}</h1>
            <h2 class="text-lg font-thin mt-4">{{ __('pages.home.heroSection.subtitle') }}</h2>
            <img class="mt-10 h-56 m-auto" src="{{ asset('images/avatar.png') }}" alt="Avatar">

            <div class="flex justify-center mt-80">
                <img class="absolute bottom-0" src="{{ asset('images/hero.svg') }}" alt="Hero-image">
            </div>

        </section>

        <!-- Intro Section -->
        <section class="bg-bordeaux text-center text-white">
            <div class="px-10 pt-24 pb-40 w-full md:w-2/3 lg:w-3/5 m-auto">
                <h1 class="text-3xl font-medium">{{ __('pages.home.introSection.title') }}</h1>
                <h2 class="mt-10 text-lg font-normal"> {{ __('pages.home.introSection.subtitle') }} </h2>
            </div>
        </section>

        <!-- About Section -->
        <section class="px-4 mb-40">
            <div class="container mx-auto -mt-12 px-4 pt-6 pb-10 bg-white shadow-lg rounded-3xl">

                <div class="text-center">
                    <h1 class="section-title">{{ __('pages.home.aboutSection.title') }}</h1>
                </div>

                <!-- Qualitites -->
                <div class="lg:flex lg:flex-wrap px-6 md:px-20 mt-6 text-center">

                    <div class="quality">
                        <img class="m-auto w-24" src="{{ asset('images/quality1.png') }}" alt="Quality-heart">
                        <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality1Title') }}</h2>
                        <p class="section-text">{{ __('pages.home.aboutSection.quality1Text') }}</p>
                    </div>

                    <div class="quality">
                        <img class="m-auto w-24" src="{{ asset('images/quality1.png') }}" alt="Quality-heart">
                        <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality2Title') }}</h2>
                        <p class="section-text">{{ __('pages.home.aboutSection.quality2Text') }}</p>
                    </div>

                    <div class="quality">
                        <img class="m-auto w-24" src="{{ asset('images/quality1.png') }}" alt="Quality-heart">
                        <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality3Title') }}</h2>
                        <p class="section-text">{{ __('pages.home.aboutSection.quality3Text') }}</p>
                    </div>

                </div>

            </div>
        </section>

    </body>
</html>
