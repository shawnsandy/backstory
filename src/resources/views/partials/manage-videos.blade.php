
@component('backstory::components.modals', ["modal_name" => "video-modal"])
@slot('title')
Insert Videos
@endslot
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eligendi repudiandae amet perspiciatis corporis ipsam quidem nihil. Dolores nemo sapiente cum incidunt tempora laudantium, impedit officia, culpa voluptates aperiam quod?</p>
   @slot('footer')
    <p class="has-text-right">
    <button type="button" class="button is-success is-large close-box">Insert Images</button>
    </p>
@endslot
@endcomponent
