<div class="modal image-modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <div class="container is-fluid content image-fields">
      <p class="subtitle is-6 is-uppercase">Insert Images</p>
</div>
    </header>
    <section class="modal-card-body">
      <div class="container is-fluid">

    <div class="columns is-multiline">
        @foreach(backstory()->getImgs() as $item)
            <div class="column is-3">
                <img class="select-image" data-img="{{ backstory()->imgFly($item, 'small')  }}" src="{{ backstory()->imgFly($item, 'small') }}" alt="">
                <p class="has-text-centered">
                <button class="button is-small is-info">Insert</button>
                <a href="#" class="button is-small is-info is-outlined insert-images-button close-box" data-img="{{ url(backstory()->imgFly($item, 'small'))  }}">Small</a>
                <a href="#" class="button is-small is-info is-outlined insert-images-button close-box" data-img="{{ url(backstory()->imgFly($item, 'medium'))  }}">Med</a>
                <a href="#" class="button is-small is-info is-outlined insert-images-button close-box" data-img="{{ url(backstory()->imgFly($item, 'large'))  }}">Large</a>
                </p>
            </div>
        @endforeach
    </div>

</div>
    </section>
    <footer class="modal-card-foot">
    <div class="content">
    <p class="has-text-right">
        <button type="button" class="button is-info is-outlined close-box">
        <span class="icon"><i class="fa fa-close"></i> </span><span>Close</span></button>
    </p>
    </div>
    </footer>
  </div>
  <div>
  <button type="button" class="modal-close is-large" aria-label="close"></button>
  </div>
</div>
@push('scripts')
<script>


</script>
@endpush
