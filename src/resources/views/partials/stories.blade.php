
@foreach(backstory()->latestStories(config('backstory.stories_per_page', 10)) as $story)
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

    <h2 class="is-uppercase">
        {{ $story->title }}
    </h2>

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
