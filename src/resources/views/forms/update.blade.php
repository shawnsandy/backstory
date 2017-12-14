<div class="">
    {{ backstory()->newForm($model) }}
<p class="has-text-right">
       <button class="button is-link is-medium is-rounded" type="submit">Update Story</button>
</p>
    @include("backstory::partials.create-form")
    <p class="has-text-right">
    <button class="button is-link is-medium is-rounded" type="submit">Update Story</button>
    </p>
    {!! backstory()->formClose(true); !!}
    @include('backstory::partials.manage-images')
    @include('backstory::partials.manage-videos')
    @include('backstory::partials.manage-code')
</div>
