@extends('layouts.master')

@section('title', 'Admin - Portfolio Item Details')

@section('content')
        <h1>{{ $project->title }}</h1>    

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customer: {{ $project->customer }}</h3>
                <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="img-fluid my-3"
                    style="max-height: 400px; object-fit: cover;">
                <p class="card-subtitle">{{$project->description}}</p>
            </div>
        </div>

        <div class="my-3">
            <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project->id) }}">Modifica</a>
        </div>

@endsection