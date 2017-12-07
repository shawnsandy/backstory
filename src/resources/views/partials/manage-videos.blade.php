
@component('backstory::components.modals', ["modal_name" => "video-modal"])
@slot('title')
Insert Videos
@endslot
<div class="field">
<div class="control">
{{ html()->textarea('video-embed')->class('textarea')->placeholder('Enter video code and hit insert') }}
</div>
</div>
   @slot('footer')
    <p class="">
    <button type="button" class="button is-success close-box">Insert video</button>
    </p>
@endslot
@endcomponent
