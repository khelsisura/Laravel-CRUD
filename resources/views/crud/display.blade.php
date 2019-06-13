@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>
        <a href="{{ route('crud.index') }}" class="btn btn-link text-info" target="_self">
            <i class="fas fa-arrow-left"></i>
        </a>
        Lorem Ipsum
    </h1>
    <div class="row">
        <div class="col">
            <h5>Address: {{ $crud->address }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>City: {{ $crud->city }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>State: {{ $crud->state }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5>Zip: {{ $crud->zip }}</h5>
        </div>
    </div>
</div>
@endsection