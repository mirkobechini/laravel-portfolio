@extends('admin.layouts.master')
@section('title', "Admin Dashboard")
@section('content')
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Use the navigation bar to manage your portfolio.</p>

    @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Project</a>
            </div>
        </div>
    @endforeach
@endsection
