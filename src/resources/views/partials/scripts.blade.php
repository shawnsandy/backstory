@push('styles')
    <link rel="stylesheet" href="/assets/backstory/backstory.css">
@endpush

@push('scripts')

<script src="/assets/backstory/app.js"></script>
@endpush

@push('inline-scripts')
    <script>


    var imageButton = u(".image-button");
    var videoButton = u(".video-button");
    var codeButton = u(".code-button");

    function launchModals(el, mmodal) {}

    u(imageButton).handle("click", function(e) {
        console.log("button clicked");
        u(".image-modal").addClass("is-active");
    });

    u(videoButton).handle("click", function(e) {
        console.log("button clicked");
        u(".video-modal").addClass("is-active");
    });

    u(codeButton).handle("click", function(e) {
        console.log("button clicked");
        u(".code-modal").addClass("is-active");
    });

    var launchModals = function(button, modal) {
        u(button).handle("click", function(e) {
            console.log("button clicked");
            u(modal).addClass("is-active");
        });
    };



    </script>
@endpush
