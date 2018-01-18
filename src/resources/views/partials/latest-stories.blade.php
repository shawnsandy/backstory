<h4 class="subtitle is-4">Latest Stories</h4>
<div class="content">
    @foreach(Backstory::latestStories() as $item)
    <p>
        <a href="{{ config("backstory.stories.update_url", 'update-story' ) }}{{ $item->id }}/edit" class="is-dark">{{ $item->title }}</a>
    </p>
    @endforeach
</div>
