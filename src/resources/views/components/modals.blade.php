<div class="modal {{ $modal_name }}">
  <div class="modal-background"></div>
  <div class="modal-content">
  <div class="box">
    <p class="subtitle is-5 is-uppercase">{{ $title or "Apps" }}</p>
    {{ $slot }}
    <p class="subtitle">{{ $footer or "" }}</p>
     <p class="has-text-right">
    <button type="button" class="button is-small is-outlined close-box">
    <span class="icon"><i class="fa fa-close"></i> </span><span>Close</span></button>
    </p>
  </div>
  </div>
  <div>
  <button type="button" class="modal-close is-large" aria-label="close"></button>
  </div>
</div>
