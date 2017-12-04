{{ html()->form('POST', '/story/category')->open() }}

<div class="field">
    <div class="control">
    <label class="label">Name</label>
            {{ html()->text('name')->class('input is-fullwidth') }}
    </div>
</div>

<div class="field">
    <div class="control">
    <label class="label">description</label>
            {{ html()->text('description')->class('input is-fullwidth') }}
    </div>
</div>
<div class="control">
<button class="button is-info">Add Category</button>
</div>

{{ html()->form()->close() }}
