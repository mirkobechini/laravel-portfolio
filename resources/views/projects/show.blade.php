@extends('layouts.master')

@section('title', 'Admin - Portfolio Item Details')

@section('content')
        <h1>{{ $project->title }}</h1>    

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customer: {{ $project->customer }}</h3>
                <p class="card-subtitle">{{$project->description}}</p>
            </div>
        </div>

        <div class="my-3">
            <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project->id) }}">Modifica</a>
        </div>

@endsection