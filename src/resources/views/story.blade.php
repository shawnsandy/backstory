
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
@include('backstory::partials.latest-stories')
@endsection
