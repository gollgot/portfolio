@extends('layouts.app')

@section('title')
    {{ __('pages.home.pageTitle') }}
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="text-center p-5 mt-20 relative">
        <h1 class="text-4xl font-bold">{{ __('pages.home.heroSection.title') }}</h1>
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
            <h2 class="mt-10 text-lg font-normal"> {!! __('pages.home.introSection.subtitle') !!} </h2>
        </div>
    </section>

    <!-- About Section -->
    <section class="px-4">
        <div class="container mx-auto -mt-16 py-10 p-16 bg-white shadow-lg rounded-3xl">

            <div class="text-center">
                <h1 class="section-title">{{ __('pages.home.aboutSection.title') }}</h1>
            </div>

            <!-- Qualitites -->
            <div class="lg:flex lg:flex-wrap px-6 md:px-20 mt-6 text-center border-b-2 border-dotted pb-6">

                <div class="quality">
                    <img class="m-auto w-24" src="{{ asset('images/quality1.png') }}" alt="Quality-heart">
                    <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality1Title') }}</h2>
                    <p class="section-text mt-2">{{ __('pages.home.aboutSection.quality1Text') }}</p>
                </div>

                <div class="quality">
                    <img class="m-auto w-24" src="{{ asset('images/quality2.png') }}" alt="Quality-heart">
                    <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality2Title') }}</h2>
                    <p class="section-text mt-2">{{ __('pages.home.aboutSection.quality2Text') }}</p>
                </div>

                <div class="quality">
                    <img class="m-auto w-24" src="{{ asset('images/quality3.png') }}" alt="Quality-heart">
                    <h2 class="mt-6 section-subtitle">{{ __('pages.home.aboutSection.quality3Title') }}</h2>
                    <p class="section-text mt-2">{{ __('pages.home.aboutSection.quality3Text') }}</p>
                </div>

            </div>

            <div class="w-3/4 m-auto">
                <!-- Languages -->
                <div class="mt-10 flex xl:w-1/2">
                    <i class="text-bordeaux text-3xl mr-6 mt-2 fas fa-code"></i>
                    <div>
                        <h2 class="section-subtitle">{{ __('pages.home.aboutSection.languagesTitle') }}</h2>
                        <p class="section-text">{{ is_null($languages) ? '-' : $languages->value }}</p>
                    </div>
                </div>

                <!-- Frameworks -->
                <div class="flex">
                    <div class="invisible xl:visible xl:w-1/2"></div>
                    <div class="flex mt-6 xl:mt-4 xl:text-right xl:flex-row-reverse xl:w-1/2">
                        <i class="text-bordeaux text-3xl mr-6 mt-2 xl:ml-6 xl:mr-0 fas fa-toolbox"></i>
                        <div>
                            <h2 class="section-subtitle">{{ __('pages.home.aboutSection.frameworksTitle') }}</h2>
                            <p class="section-text">{{ is_null($frameworks) ? '-' : $frameworks->value }}</p>
                        </div>
                    </div>
                </div>

                <!-- Tools -->
                <div class="mt-6 flex xl:mt-4 xl:w-1/2">
                    <i class="text-bordeaux text-3xl mr-6 mt-2 fas fa-tools"></i>
                    <div>
                        <h2 class="section-subtitle">{{ __('pages.home.aboutSection.toolsTitle') }}</h2>
                        <p class="section-text">{{ is_null($tools) ? '-' : $tools->value }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Projects Section -->
    <section>
        <div class="container mx-auto mt-10">

            <div class="text-center">
                <h1 id="projects" class="section-title">{{ __('pages.home.projectsSection.title') }}</h1>
            </div>

            @if (count($projects) == 0)
                <!-- No projects yet-->
                <div class="my-10 text-center">
                    <p>{{ __('pages.home.projectsSection.noProjectsFound') }}</p>
                </div>
            @else
                <!-- Display projects -->
                <div class="mt-5 mb-10 flex justify-around flex-wrap">

                    @foreach ($projects as $currentProject)
                        <a href="{{ route('projects.show', [App::getLocale(), $currentProject->slug]) }}">
                            <div class="project" style="background-image: url({{ is_null($currentProject->previewImage) ? asset('images/no_image.png') : asset('storage/'.$currentProject->previewImage) }})">
                                <div class="project--hover text-center">
                                    <h2 class="text-xl font-bold">{{ $currentProject->name }}</h2>
                                    <h3 class="mt-3 text-md font-light">{{ $currentProject->technoPreview }}</h3>
                                    <div class="btn__details">{{ __('pages.home.projectsSection.details') }}</div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            @endif

        </div>
    </section>

@endsection
