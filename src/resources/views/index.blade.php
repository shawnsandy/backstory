@extends('backstory::layouts.layout')
@section('title', 'backstory')
@section('hero_class', 'is-medium is-dark')
@section('content')

@include('backstory::partials.stories', ['stories' => $stories])

@endsection
@section("sidebar")

@component('backstory::components.categories')
    <p class="is-size-7 is-uppercase">
    Story Categories

    </p>
@endcomponent

@endsection
@include("backstory::partials.scripts")
