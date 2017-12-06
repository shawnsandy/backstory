
    <div class="field">
        {{ Backstory::label('Categories', 'category')->class('label') }}
        <div class="control">
            <div class="is-fullwidth">
                {{ Backstory::category([]) }}
            </div>
        </div>
    </div>
    @push('scripts')

<script>

</script>
    @endpush
