<button type="button" class="button is-rounded is-info manage-categories is-invisible">Add Categories</button>

<div class="modal categories">
  <div class="modal-background"></div>
  <div class="modal-content">
    <!-- Any other Bulma elements you want -->
    <div class="box">
    @include('backstory::forms.categories')
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
