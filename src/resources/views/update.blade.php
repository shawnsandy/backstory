@extends('backstory::layouts.layout')

@section('content')
<div class="">
<div class="container is-fluid">

</div>
</div>
<p class="subtitle is-2 is-capitalized">Edit your Story</p>
@include('backstory::forms.update')
@endsection

@section("sidebar")
@include("backstory::partials.edit-preview")
@include('backstory::partials.latest-stories')
@endsection
@include("backstory::partials.scripts")
