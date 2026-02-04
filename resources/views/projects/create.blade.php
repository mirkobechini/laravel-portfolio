@extends('layouts.master')
@section('title', 'Admin - Create New Project')

@section('content')
    <h1 class="mb-3">Crea Nuovo Progetto</h1>
    <form class="form-control" action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="customer" name="customer">
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="6" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo</label>
            <select class="form-select" id="type_id" name="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tecnologie</label>
            <div class="form-control d-flex flex-wrap gap-3">
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                            id="technology-{{ $technology->id }}">
                        <label class="form-check-label"
                            for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
