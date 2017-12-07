
@component('backstory::components.modals', ["modal_name" => "image-modal"])
@slot('title')
Insert Images
@endslot
<div class="columns is-multiline">
@foreach(backstory()->getImgs() as $item)
    <div class="column is-4">
    <img src="{{ backstory()->imgFly($item) }}" alt=""></div>
@endforeach
</div>
@slot('footer')
    <p class="">
    <button type="button" class="button is-success close-box">Insert Image</button>
    </p>
@endslot
@endcomponent
