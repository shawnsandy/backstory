<div class="control">
<div class="field">
  <div class="file is-large has-name is-fullwidth">
    <label class="file-label">
      <input id="cover-photo" class="file-input" type="file" name="cover_photo">
      <span class="file-cta">
        <span class="file-icon">
          <i class="fa fa-upload"></i>
        </span>
        <spanclass="file-label">
         Cover Photo
        </span>
      </span>
      <span id="file-name" class="file-name is-primary">
      {{ $cover_photo or "Upload a cover image / photo for you story"}}
      </span>
    </label>
  </div>
</div>

</div>
@push('scripts')

@endpush
