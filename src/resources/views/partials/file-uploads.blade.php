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
          Upload Cover Photo
        </span>
      </span>
      <span id="file-name" class="file-name is-primary">
      {{ $cover_photo or ""}}
      </span>
    </label>
  </div>
</div>

</div>
@push('scripts')
  <script>
  var file = document.getElementById("cover-photo");
    file.onchange = function(){
    if(file.files.length > 0)
    {
      document.getElementById('file-name').innerHTML = file.files[0].name;
      //console.log(file)
    }
};
</script>
@endpush
