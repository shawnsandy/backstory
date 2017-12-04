<div class="backstory">

    <div class="field">
        {{ Backstory::label('Whats the title of your Story', 'title') }}
        <div class="control">
            {{ Backstory::title() }}
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Write a simple introduction to your story', 'title')->class('checkbox') }}
        <div class="control">
            {{ Backstory::introduction() }}
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Add a category', 'title')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::category() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Whats you like this story featured', 'title')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::featured() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('What type of story are you writing', 'title')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::type() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Post status', 'title')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::status() }}
            </div>
        </div>
    </div>

    @include('backstory::partials.file-uploads', ['cover_photo' => isset($story['cover_photo']) ? $story['cover_photo'] : null])

    <div class="field">
        {{ Backstory::label('Add the content of your story here', 'content') }}
        <div class="control">
            {{ Backstory::content() }}
        </div>
    </div>


</div>

@push('scripts')
<script src="/assets/backstory/ckeditor.js"></script>
<script>
var ckview = document.getElementById("content");
 ClassicEditor.create(ckview);
</script>

@endpush
