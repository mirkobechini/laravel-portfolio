@extends('layouts.master')

@section('title', 'Admin - Types Item Details')

@section('content')
        <h1>{{ $type->name }}</h1>    

        <div class="card">
            <div class="card-header">
                <p class="card-subtitle">{{$type->description}}</p>
            </div>
        </div>

        <div class="my-3">
            <a class="btn btn-outline-warning" href="{{ route('types.edit', $type->id) }}">Modifica</a>
        </div>

@endsection