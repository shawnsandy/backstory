<div class="">

{{ backstory()->newForm($model) }}

@include("backstory::partials.create-form")

<button class="button is-link is-medium" type="submit">Update Story</button>
{!! backstory()->formClose(true);  !!}
</div>
