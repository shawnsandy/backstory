<div class="box is-shadowless">
        {{ $slot }}
    <div class="content">
        @foreach(Backstory::categories() as $item)
        <p class="is-size-6 is-uppercase">
            <a class="has-text-dark" href="/story/category/{{ $item->id }}">
            {{ $item->name }}
            </a>
        </p>
        @endforeach
    </div>
</div>
