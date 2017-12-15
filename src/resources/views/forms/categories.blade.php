{{ Form::open(['url' => '/story/category']) }}

<div class="field">
    <div class="control">
    <label class="label">Name</label>

            {{ Form::text('name', null, ['class' => 'input is-fullwidth', 'required']) }}
    </div>
</div>

<div class="field">
    <div class="control">
    <label class="label">description</label>
            {{ Form::text('description', null, ['class' => 'input is-fullwidth']) }}
    </div>
</div>
<div class="control">
<button class="button is-info is-rounded">Add Category</button>
<button type="button" class="button is-rounded close-box">Cancel</button>
</div>

{{ Form::close() }}
