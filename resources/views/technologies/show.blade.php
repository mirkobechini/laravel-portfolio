@extends('layouts.master')

@section('title', 'Admin - Technologies Item Details')

@section('content')
        <h1>{{ $technology->name }}</h1>    

        <div class="card">
            <div class="card-header">
            <img src="{{$technology->logo}}" alt="{{$technology->name}} logo" class="img-fluid my-3"
                    style="max-height: 200px; object-fit: contain;">
            </div>
            <div class="card-body">
                <p class="card-subtitle">{{$technology->description}}</p>
            </div>
        </div>

        <div class="my-3">
            <a class="btn btn-outline-warning" href="{{ route('technologies.edit', $technology->id) }}">Modifica</a>
        </div>

@endsection