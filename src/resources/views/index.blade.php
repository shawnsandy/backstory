@extends('backstory::layouts.layout')
@section('title', 'backstory')
@section('hero_class', 'is-medium is-dark')
@section('content')

@include('backstory::partials.stories')

@endsection
@section("sidebar")

@component('backstory::components.categories')
    <p class="is-size-7 has-text-right is-uppercase">
    Story Categories
    <hr>
    </p>
@endcomponent

@endsection
