@extends('backstory::layouts.layout')
@section('title', 'backstory')
@section('hero_size', 'is-medium is-dark')
@section('content')

@include('backstory::partials.stories')

@endsection
@section("sidebar")
@include('backstory::forms.categories')
@endsection
