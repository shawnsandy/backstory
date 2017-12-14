@php
$stories = backstory()->latestStories();
@endphp
@foreach($stories as $story)
<article class="content is-medium">
<p class="is-small has-text-right">
<div class="tags has-addons has-text-right">
<span class="tag">Author</span>
<span class="tag is-dark">{{ $story->by }}</span>
</div>
</p>
    @if(!empty($story->cover))
    <a href="{{ url("story") }}/{{ $story->id }}" class=""><img src="{{ $story->cover }}" alt=""></a>
    @endif

    <h1 class="is-uppercase title">
        {{ $story->title }}
    </h1>

    <p class="is-size-5">
    {{ $story->introduction }}
    </p>

    <p class="has-text-right">
        <span class="">
        <a href="{{ url("story") }}/{{ $story->id }}" class="is-link button is-outlined is-rounded">Read FullStory</a>
        </span>
    </p>
    <hr>
</article>
@endforeach
<div class="section">
{{ $stories->links('backstory::components.paginate') }}
</div>
