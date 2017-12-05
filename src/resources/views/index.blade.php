@extends('backstory::layouts.layout') @section('title', 'backstory') @section('content')

<div class="content">
    @foreach(backstory()->latestStories(10) as $story)
    <p class="subtitle is-5">
        <span class="is-text-6">
        <a href="{{ config("backstory.stories.update_url") }}{{ $story->id }}" class="is-link is-outlined"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </span>
        {{ $story->title }}
    </p>
<hr>
@endforeach
</div>
@endsection
@section("sidebar")
@include('backstory::forms.categories')
@endsection
