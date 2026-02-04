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
            <textarea class="form-control" id="description" rows="6" name="description">{{ $project->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo</label>
            <select class="form-select" id="type_id" name="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{$project->type_id == $type->id ? 'selected':''}}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tecnologie</label>
            <div class="form-control d-flex flex-wrap gap-3">
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                            id="technology-{{ $technology->id }}" {{($project->technologies->contains($technology->id)?'checked':"")}}>
                        <label class="form-check-label"
                            for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
