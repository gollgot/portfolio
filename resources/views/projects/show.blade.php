@extends('layouts.app')

@section('title')
    {{ $project->name }}
@endsection

@section('content')

    <div class="container mx-auto p-4">

        <!-- Arrow back to home -->
        <a href="{{ route('home.show', App::getlocale()).'#projects' }}">
            <div class="inline-block hover-border">
                <img class="inline w-10 -mt-3" src="{{ asset('images/arrow_left.png') }}" alt="Arrow-back">
                <h2 class="inline-block text-3xl text-bordeaux font-light">Portfolio</h2>
            </div>
        </a>

        <!-- Intro Section -->
        <section class="text-center">
            <h1 class="mt-6 text-4xl font-bold">{{ $project->name }}</h1>
            <h3 class="font-thin">{{ date('d-m-Y', strtotime($project->creationDate)) }}</h3>
            <div class="mt-6 normalize-roboto-light-center w-2/3 mx-auto">
                {!! $project->description !!}
            </div>
        </section>

        @if(!is_null($project->images))
            <!-- Gallery Section -->
                <section class="mt-10 mb-20">
                    <div class="gallery flex flex-wrap justify-center">
                        @foreach(json_decode($project->images) as $imgPath)
                            <a href="{{ asset('storage/'.$imgPath) }}">
                                <div class="md:mr-6 mt-6 w-80 h-48 border-2 border-anthracite bg-cover bg-center" style="background-image: url({{ asset('storage/'.$imgPath) }})">

                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>
        @endif

        <!-- Details Section -->
        <section class="mt-10 text-center">
            <h2 class="mt-6 section-subtitle">{{ __('pages.projects.detailsSection.scopeTitle') }}</h2>
            <p class="text-lg font-light">{{ $project->scope}}</p>

            <h2 class="section-subtitle mt-6">{{ __('pages.projects.detailsSection.technologiesTitle') }}</h2>
            <p class="text-lg font-light">{{ $project->techno}}</p>

            @if(!is_null($project->sources))
                <h2 class="section-subtitle mt-6">{{ __('pages.projects.detailsSection.sourcesTitle') }}</h2>
                <a class="text-lg font-light" href="{{ $project->sources}}" target="_blank">{{ $project->sources}}</a>
            @endif
        </section>

    </div>

@endsection

@section('js')
    <script>
        baguetteBox.run('.gallery', {
            captions: false,
            buttons: 'auto', // arrows navigation
            fullScreen: false,
            noScrollbars: false,
            bodyClass: 'baguetteBox-open',
            titleTag: false,
            async: false,
            preload: 2,
            animation: 'slideIn', // fadeIn or slideIn
            verlayBackgroundColor: 'rgba(0,0,0,.8)'
        });
    </script>
@endsection
