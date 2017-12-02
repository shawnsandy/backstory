<div class="section">
{!! html()->modelForm($story,'PUT', "/story/create/{$story->id}")->open()  !!}

@include("backstory::partials.create-form")

<button class="button is-link is-medium" type="submit">Update Story</button>
{!! html()->closeModelForm()  !!}
</div>
