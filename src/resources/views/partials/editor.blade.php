<div class="field">
    <div class="control">
    <div class="editor-bar is-uppercase">
    <div class="columns">
        <div class="column is-3 has-text-light">
            {{ Backstory::label('Add your story', 'content') }} {{--
            <span class="tag is-dark"> :: </span> --}}
        </div>
        <div class="column has-text-right">
            @include("backstory::partials.edit-bar")
        </div>
    </div>
</div>

        {{ Backstory::content() }}
    </div>
</div>
