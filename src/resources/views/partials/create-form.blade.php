<div class="backstory">

    <div class="field">
        {{ Backstory::label('Title', 'title') }}
        <div class="control">
            {{ Backstory::title() }}
        </div>
    </div>

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
                {{ Backstory::category() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Featured', 'featured')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::featured() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('What type of story are you writing', 'type')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::type() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Post status', 'status')->class('label') }}
        <div class="control">
            <div class="select is-fullwidth">
                {{ Backstory::status() }}
            </div>
        </div>
    </div>

    @include('backstory::partials.file-uploads', ['cover_photo' => isset($model->cover_photo) ? $model->cover_photo : null])

    <div class="field">
        {{ Backstory::label('Add the content of your story here', 'content') }}
        <div class="control">
         {{--  <p>
            <button class="insert button">Insert</button>
        </p>  --}}
            {{ Backstory::content() }}
        </div>
    </div>


</div>

@push("styles")
{{--  <link rel="stylesheet" href="/assets/backstory/choices/base.min.css">  --}}
<link rel="stylesheet" href="/assets/backstory/choices/choices.min.css">
@endpush

@push('scripts')
<script src="/assets/backstory/ckeditor/ckeditor.js"></script>
<script src="/assets/backstory/choices/choices.min.js"></script>
<script>
var choices = new Choices('#category', {
    addItems: true,
    placeholder: true,
    removeItems: true,
    placeholderValue: "Select a category for your story"
});
</script>
@endpush
