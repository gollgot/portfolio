@extends('layouts.app')

@section('title')
    {{ $project->name }}
@endsection

@section('content')

    <div class="container mx-auto p-4">

        <!-- Arrow back to home -->
        <a href="{{ route('home.show', App::getlocale()).'#projects' }}">
            <div class="inline-block">
                <img class="inline w-10 -mt-3" src="{{ asset('images/arrow_left.png') }}" alt="Arrow-back">
                <h2 class="inline-block text-3xl text-bordeaux font-light">Portfolio</h2>
            </div>
        </a>

        <!-- Intro Section -->
        <section class="text-center">
            <h1 class="mt-6 text-4xl font-bold">{{ $project->name }}</h1>
            <div class="mt-6 font-thin w-2/3 mx-auto">
                {!! $project->description !!}
            </div>

        </section>


    </div>

@endsection
