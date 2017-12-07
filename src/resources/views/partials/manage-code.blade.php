 @component('backstory::components.modals', ["modal_name" => "code-modal"])
 @slot('title')
 Insert Code Snippet
 @endslot
<div class="field">
    <div class="control">
        {{ html()->textarea('code-box')->class('textarea')->placeholder('Enter some code here') }}
    </div>
</div>
<p class="">
    <button class="button is-success">Insert Code</button>
</p>
@slot('footer')
@endslot
@endcomponent
