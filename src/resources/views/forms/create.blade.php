<div class="">
{!! Backstory::newForm() !!}

@include("backstory::partials.create-form")

<button class="button is-link is-medium" type="submit">Save Story</button>
{!! backstory()->formClose();  !!}
</div>
