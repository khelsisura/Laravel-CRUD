@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Lorem Ipsum</h1>
    <div class="d-flex">
        <div class="p-2 align-self-center">
            @if (session('success'))
            <div class="alert alert-success mb-0">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div class="p-2 ml-auto">
            <a class="btn btn-primary" href="{{ route('crud.create') }}" target="_self">
                <i class="fas fa-plus"></i>
                Add
            </a>
        </div>
    </div>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Details</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $incrementalID = 1; ?>
                @if (count($crud) > 0)
                @foreach ($crud as $key => $value)
                <tr>
                    <td>
                        {{$incrementalID++}}
                    </td>
                    <td>
                        {{ $value->title }}
                    </td>
                    <td>
                        {{ $value->body }}
                    </td>
                    <td class="pt-2 text-center">
                        <a class="btn btn-link text-info" target="_self" href="{{route('crud.show', $value->id)}}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-link text-info" target="_self" href="{{route('crud.edit', $value->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['crud.destroy', $value->id], 'class' => 'd-inline', 'target' => '_self']) !!}
                        <button type="submit" style="display: inline;" class="btn btn-link text-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                @elseif (count($crud) == 0)
                <tr>
                    <td>
                        <b>No Data</b>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection