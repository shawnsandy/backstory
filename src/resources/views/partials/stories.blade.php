
@foreach(backstory()->latestStories(10) as $story)
<div class="content is-large">
    <h3 class="is-uppercase">
        {{ $story->title }}
    </h3>
    @if(!empty($story->cover))
    <a href="{{ url("story") }}/{{ $story->id }}" class=""><img src="{{ $story->cover }}" alt=""></a>
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
