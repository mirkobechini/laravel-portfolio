@extends('layouts.master')
@section('title', 'Admin - Manage Types')

@section('content')
    <h1>Manage Types</h1>
    <p>This is the types management page. Here you can create, edit, and delete project types.</p>
    <a class="btn btn-success my-4" href="{{ route('types.create') }}">Create New Type</a>

    <table class="table table-dark table-striped">
        <thead>
            <td>Nome</td>
            <td>Descrizione</td>
            <td>Azioni</td>
        </thead>
        @foreach ($types as $type)
        <tr>
            <td>{{$type->name}}</td>
            <td>{{$type->description}}</td>
            <td><a href="{{ route('types.show', $type->id) }}" class="btn btn-primary">Visualizza</a>
                <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Modifica</a>
                <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $type->id }}"
                    class="btn btn-danger">Elimina</button>
                </td>
        </tr>
        @endforeach
    </table>


    

@endsection
