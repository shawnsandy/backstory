<div class="">
{!! Backstory::newForm() !!}

@include("backstory::partials.create-form")
<p class="has-text-right">
<button class="button is-link is-medium is-rounded" type="submit">Save Story</button>
</p>
    {!! backstory()->formClose();  !!}
    @include('backstory::partials.manage-images')
    @include('backstory::partials.manage-videos')
    @include('backstory::partials.manage-code')
</div>
