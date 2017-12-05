@extends('backstory::layouts.layout')
@section('title', 'backstory')

@section('content')

<div class="content">
@foreach(backstory()->latestStories(10) as $story)
<p class="subtitle is-3">{{ $story->title }}</p>
<p class="has-text-right">
<a href="{{ config("backstory.stories.update_url") }}{{ $story->id }}" class="button is-medium">
Edit Story
</a>
</p>
<hr>
@endforeach
</div>
@endsection

@section("sidebar")
{{--  @include('backstory::partials.latest-stories')  --}}
@endsection
