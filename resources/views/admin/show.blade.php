@extends('admin.layouts.master')

@section('title', 'Admin - Portfolio Item Details')

@section('content')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $project->title }}</h3>
                <p class="card-subtitle">{{$project->description}}</p>
            </div>
        </div>

@endsection