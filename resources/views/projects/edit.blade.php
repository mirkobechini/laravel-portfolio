@extends('layouts.master')
@section('title', 'Admin - Edit Project')

@section('content')
    <h1 class="mb-3">Modifica Progetto</h1>
    <form class="form-control" action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="customer" name="customer" value="{{ $project->customer }}">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image" value="{{ $project->cover_image }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
