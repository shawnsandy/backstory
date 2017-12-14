<div class="box">
    {{ $slot }}
        @foreach(Backstory::categories() as $item)

           <p class="is-size-5">
           <a href="/story/category/{{ $item->id }}">{{ $item->name }}</a>
           </p>

        @endforeach
    </ul>
</div>
</div>
