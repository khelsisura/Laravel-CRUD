@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>
        <a href="{{ route('crud.index') }}" class="btn btn-link text-info" target="_self">
            <i class="fas fa-arrow-left"></i>
        </a>
        Lorem Ipsum
    </h1>
    <div class="d-flex">
        <div class="pt-1 pb-4 align-self-center">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>
    {{ Form::open(['route'=>'crud.store','method'=>'POST', 'target' => '_self']) }}
    @include('crud.form')
    {{ Form::close() }}
</div>
@endsection