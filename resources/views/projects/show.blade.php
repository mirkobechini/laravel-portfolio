@extends('layouts.master')

@section('title', 'Admin - Portfolio Item Details')

@section('content')
        <h1>{{ $project->title }}</h1>    

        <div class="card">
            <div class="card-header position-relative">
                <span class=" position-absolute top-0 end-0 mt-2 me-2 badge bg-primary">{{ $project->type->name }}</span>
                <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="img-fluid my-3"
                    style="max-height: 400px; object-fit: cover;">
                <h3 class="card-title">Customer: {{ $project->customer }}</h3>
                    
                <div class="mb-3">Tecnologie:
                    @forelse ($project->technologies as $technology)
                    <span class="badge bg-warning">{{$technology->name}}</span>
                    @empty
                        Nessuna
                    @endforelse
                </div>
                <p class="card-subtitle">{{$project->description}}</p>
            </div>
        </div>

        <div class="my-3">
            <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project->id) }}">Modifica</a>
        </div>

@endsection