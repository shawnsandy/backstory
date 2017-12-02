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
@include('backstory::forms.update')
@endsection
