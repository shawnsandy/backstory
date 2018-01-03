@extends('backstory::layouts.layout')

@section('content')
<div class="">
<div class="container is-fluid">
@if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
</div>

</div>
<p class="subtitle is-2 is-capitalized">Create a new Story</p>
@include('backstory::forms.create')
@endsection

@section("sidebar")
@include('backstory::partials.latest-stories')
@endsection
@push('styles')
    <link rel="stylesheet" href="/assets/backstory/backstory.css">
@endpush

@push('scripts')
<script src="/assets/backstory/app.js"></script>
@endpush
