
@foreach(backstory()->latestStories(10) as $story)
<div class="content is-large">
    <h3 class="">
        {{ $story->title }}
    </h3>
    @if(!empty($story->cover))
    <img src="{{ $story->cover }}" alt="">
    @endif
    <p class="is-size-5">
    {{ $story->introduction }}
    </p>

    <p class="has-text-right">
        <span class="">
        <a href="{{ url("story") }}/{{ $story->id }}" class="is-link button is-outlined is-rounded">Read FullStory</a>
        </span>
    </p>
    <hr>
</div>
@endforeach
