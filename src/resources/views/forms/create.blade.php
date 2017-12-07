<div class="">
{!! Backstory::newForm() !!}

@include("backstory::partials.create-form")

<button class="button is-link is-medium" type="submit">Save Story</button>
    {!! backstory()->formClose();  !!}
    @include('backstory::partials.manage-images')
    @include('backstory::partials.manage-videos')
    @include('backstory::partials.manage-code')
</div>
