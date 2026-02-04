@extends('layouts.master')
@section('title', 'Admin - Manage Technologies')

@section('content')
    <h1>Manage Technologies</h1>
    <p>This is the technologies management page. Here you can create, edit, and delete project technologies.</p>
    <a class="btn btn-success my-4" href="{{ route('technologies.create') }}">Create New Technology</a>

    <table class="table table-dark table-striped">
        <thead>
            <td>Logo</td>
            <td>Nome</td>
            <td>Descrizione</td>
            <td>Azioni</td>
        </thead>
        @foreach ($technologies as $technology)
        <tr>
            <td><img class="thumbnail" src="{{$technology->logo}}" alt="{{$technology->name}} logo"></td>
            <td>{{$technology->name}}</td>
            <td>{{$technology->description}}</td>
            <td><a href="{{ route('technologies.show', $technology->id) }}" class="btn btn-primary">Visualizza</a>
                <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-warning">Modifica</a>
                <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $technology->id }}"
                    class="btn btn-danger">Elimina</button>
                </td>
        </tr>
        <!-- Modal per tecnologia {{ $technology->id }} -->
        <div class="modal fade" id="confirmDeleteModal-{{ $technology->id }}" tabindex="-1"
            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="confirmDeleteModalLabel">Cancellazione della Tecnologia</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare la tecnologia "{{ $technology->name }}"? Questa azione non può essere
                        annullata.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST">
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
