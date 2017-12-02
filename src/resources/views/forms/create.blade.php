<div class="section">
{!! html()->form('POST', "/story/create")->open()  !!}

@include("backstory::partials.create-form")

<button class="button is-link is-large" type="submit">Save Story</button>
{!! html()->form()->close()  !!}
</div>
