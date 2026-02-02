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
        <!-- Modal per tipo {{ $type->id }} -->
        <div class="modal fade" id="confirmDeleteModal-{{ $type->id }}" tabindex="-1"
            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="confirmDeleteModalLabel">Cancellazione del Tipo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare il tipo "{{ $type->name }}"? Questa azione non può essere
                        annullata.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('types.destroy', $type->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </table>


    

@endsection
