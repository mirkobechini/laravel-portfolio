@extends('layouts.master')
@section('title', 'Admin Dashboard')
@section('content')
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Use the navigation bar to manage your portfolio.</p>

    <a class="btn btn-success my-4" href="{{ route('projects.create') }}">Create New Project</a>

    @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <span class=" position-absolute top-0 end-0 mt-2 me-2 badge bg-primary">{{ $project->type->name }}</span>

                <span class="d-block"> <strong>Customer:</strong> {{ $project->customer }}</span>
                <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="img-fluid my-3"
                    style="max-height: 200px; object-fit: cover;">
                <p class="card-text">{{ $project->description }}</p>

                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Visualizza progetto</a>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $project->id }}"
                    class="btn btn-danger">Elimina</button>
            </div>
        </div>

        <!-- Modal per progetto {{ $project->id }} -->
        <div class="modal fade" id="confirmDeleteModal-{{ $project->id }}" tabindex="-1"
            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="confirmDeleteModalLabel">Cancellazione del progetto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare il progetto "{{ $project->title }}"? Questa azione non può essere
                        annullata.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
