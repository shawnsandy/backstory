<div class="">
    {{ backstory()->newForm($model) }}
    @include("backstory::partials.create-form")
    <button class="button is-link is-medium" type="submit">Update Story</button>
    {!! backstory()->formClose(true); !!}
    @include('backstory::partials.manage-images')
    @include('backstory::partials.manage-videos')
    @include('backstory::partials.manage-code')
</div>
