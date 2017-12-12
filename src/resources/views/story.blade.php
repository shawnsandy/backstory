
@extends('backstory::layouts.layout')

@section('content')
<div class="container content">
<p class="title is-2">
{{ $story->title }}
</p>

<div class="story">
{!! $story->content !!}
</div>

</div>

@endsection

@section("sidebar")
@include('backstory::partials.latest-stories')
@endsection
