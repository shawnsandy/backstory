<div class="backstory">

    <div class="field">
        {{ Backstory::label('Whats the title of your Story', 'title') }}
        <div class="control">
            {{ Backstory::title() }}
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Write a simple introduction to your story', 'title')->class('checkbox') }}
        <div class="control">
            {{ Backstory::introduction() }}
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Whats you like this story featured', 'title')->class('label') }}
        <div class="control">
            <div class="select">
                {{ Backstory::featured() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('What type of story are you writing', 'title')->class('label') }}
        <div class="control">
            <div class="select">
                {{ Backstory::type() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Post status', 'title')->class('label') }}
        <div class="control">
            <div class="select">
                {{ Backstory::status() }}
            </div>
        </div>
    </div>

    <div class="field">
        {{ Backstory::label('Add the content of your story here', 'content') }}
        <div class="control">
            {{ Backstory::content() }}
        </div>
    </div>
    <div class="control">
        <div class="file">
            <label class="file-label">
                <input class="file-input" type="file" name="cover_photo">
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fa fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Upload a Cover Image / Photo
                    </span>
                </span>
            </label>
        </div>

    </div>
</div>
