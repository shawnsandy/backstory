<div class="">

{{ backstory()->newForm(1) }}

@include("backstory::partials.create-form")

<button class="button is-link is-medium" type="submit">Update Story</button>
{!! backstory()->formClose(true);  !!}
</div>
