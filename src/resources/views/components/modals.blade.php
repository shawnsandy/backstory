<div class="modal {{ $modal_name }}">
  <div class="modal-background"></div>
  <div class="modal-content">
  <div class="box">
    <p class="subtitle is-4">{{ $title or "Apps" }}</p>
    {{ $slot }}
    <p class="subtitle">{{ $footer or "" }}</p>
  </div>
  </div>
  <button type="button" class="modal-close is-large" aria-label="close"></button>
</div>
