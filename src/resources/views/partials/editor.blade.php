<div class="field">
        {{ Backstory::label('Story content', 'content') }}
        <div class="control">
        <div class="editor-bar is-uppercase">
         <div class="columns">
         <div class="column is-1">
         <span class="tag is-dark"> :: </span>
         </div>
         <div class="column has-text-right">
            <button class="insert button is-small">IMAGE</button>
            <button class="insert button is-small">MEDIA</button>
            <button class="insert button is-small">CODE</button>
         </div>
        </div>
        </div>
            {{ Backstory::content() }}
        </div>
    </div>

