<div class="box is-shadowless categories-list">
 {{ $slot }}
 <hr>
    <div class="content">
        @foreach(Backstory::categories() as $item)
        <a class="has-text-dark button is-rounded" href="/story/category/{{ $item->id }}">
            {{ $item->name }}
        </a>
        @endforeach
    </div>
</div>
