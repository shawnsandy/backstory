<div class="backstory">

    <div class="field">
        {{ Backstory::label('Title', 'title') }}
        <div class="control">
            {{ Backstory::title() }}
        </div>
    </div>

    @include('backstory::partials.editor')
<hr>
    <p class="subtitle is-3 is-uppercase">Story Options</p>

 @include('backstory::partials.file-uploads',
    ['cover_photo' => isset($model->cover_photo) ? $model->cover_photo : null])

    <div class="field">
        {{ Backstory::label('Introduction', 'introduction')->class('checkbox') }}
        <div class="control">
            {{ Backstory::introduction() }}
        </div>
    </div>


    <div class="field">
        {{ Backstory::label('Categories', 'category')->class('label') }}
        <div class="control">
            <div class="is-fullwidth">
                {{ Backstory::category([]) }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Featured', 'featured')->class('label') }}
        <div class="control">
            <div class="is-fullwidth">
                {{ Backstory::featured() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('What type of story are you writing', 'type')->class('label') }}
        <div class="control">
            <div class="is-fullwidth">
                {{ Backstory::type() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Post status', 'status')->class('label') }}
        <div class="control">
            <div class="is-fullwidth">
                {{ Backstory::status() }}
            </div>
        </div>
    </div>

</div>

@push("styles")
{{--  <link rel="stylesheet" href="/assets/backstory/choices/base.min.css">  --}}
<link rel="stylesheet" href="/assets/backstory/choices/choices.min.css">
<script src="/assets/backstory/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css"></script>
@endpush

@push('scripts')
<script src="/assets/backstory/ckeditor/ckeditor.js"></script>
<script src="/assets/backstory/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
<script src="/assets/backstory/choices/choices.min.js"></script>
<script>
hljs.initHighlightingOnLoad();

</script>
@endpush
