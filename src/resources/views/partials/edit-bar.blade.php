
            <button type="button" class="image-button button is-small is-outlined">
                <span class="icon">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </span>
                <span>Image</span>

            </button>
            <button type="button" class="video-button button is-small">
                <span class="icon">
                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                </span>
                <span>Video</span>
            </button>
            {{--  <button type="button" class="code-button button is-small">
                <span class="icon">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </span>
                <span>Code</span>
            </button>  --}}


@push('scripts')
    <script>

    var imageButton = u(".image-button");
    var videoButton = u(".video-button");
    var codeButton = u(".code-button");

    function launchModals(el, mmodal){

    }

    u(imageButton).handle("click", function(e){
        console.log("button clicked")
        u('.image-modal').addClass('is-active');
    })


    u(videoButton).handle("click", function(e){
        console.log("button clicked")
        u('.video-modal').addClass('is-active');
    })

    u(codeButton).handle("click", function(e){
        console.log("button clicked")
        u('.code-modal').addClass('is-active');
    })

    var launchModals = function(button, modal){

        u(button).handle("click", function(e){
        console.log("button clicked")
        u(modal).addClass('is-active');
    })

    }

    </script>
@endpush
