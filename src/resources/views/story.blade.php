
@extends('backstory::layouts.layout')

@section('content')
<div class="content">

<p>
<img src="{{ $story->cover }}" alt="">
</p>

<p class="title is-1">
{{ $story->title }}
</p>

{!! $story->content !!}

</div>

@endsection

@section("sidebar")
@component('backstory::components.categories')
    <p class="is-size-7 is-uppercase">
    Story Categories
    </p>
@endcomponent
@endsection
@include("backstory::partials.scripts")
