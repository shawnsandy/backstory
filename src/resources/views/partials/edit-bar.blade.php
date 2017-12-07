<div class="editor-bar is-uppercase">
    <div class="columns">
        <div class="column is-3 has-text-light">
            {{ Backstory::label('Content', 'content') }} {{--
            <span class="tag is-dark"> :: </span> --}}
        </div>
        <div class="column has-text-right">
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
            <button type="button" class="code-button button is-small">
                <span class="icon">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </span>
                <span>Code</span>
            </button>
        </div>
    </div>
</div>
@include('backstory::partials.manage-images')
@include('backstory::partials.manage-videos')
@include('backstory::partials.manage-code')
@push('scripts')
    <script>

    var imageButton = u(".image-button");
    var videoButton = u(".video-button");
    var codeButton = u(".code-button");

    u(imageButton).on("click", function(e){
        e.preventDefault();
        console.log("button clicked")
        u('.image-modal').addClass('is-active');
    })

    u(videoButton).on("click", function(e){
        e.preventDefault();
        console.log("button clicked")
        u('.video-modal').addClass('is-active');
    })

    u(codeButton).on("click", function(e){
        e.preventDefault();
        console.log("button clicked")
        u('.code-modal').addClass('is-active');
    })

    u(".modal-close, .close-box").on('click', function(e){
        e.preventDefault();
        u('.modal').removeClass('is-active');
    })

    </script>
@endpush
