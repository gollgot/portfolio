@extends('layouts.app')

@section('title')
    {{ $project->name }}
@endsection

@section('content')

    {{ $project->description }}

@endsection
