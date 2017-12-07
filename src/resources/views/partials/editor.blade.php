<div class="field">

    <div class="control">
        <div class="editor-bar is-uppercase">
            <div class="columns">
                <div class="column is-3 has-text-light">
                    {{ Backstory::label('Content', 'content') }} {{--  <span class="tag is-dark"> :: </span>  --}}
                </div>
                <div class="column has-text-right">
                    <button class="insert button is-small is-outlined">
                        <span class="icon">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </span>
                        <span>Image</span>

                    </button>
                    <button class="insert button is-small">
                        <span class="icon">
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                        </span>
                        <span>Video</span>
                    </button>
                    <button class="insert button is-small">
                        <span class="icon">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </span>
                        <span>Code</span>
                    </button>
                </div>
            </div>
        </div>
        {{ Backstory::content() }}
    </div>
</div>
