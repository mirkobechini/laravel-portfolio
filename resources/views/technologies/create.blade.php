@extends('layouts.master')
@section('title', 'Admin - Create Technology')

@section('content')
    <h1 class="mb-3">Crea Tecnologia</h1>
    <form class="form-control" action="{{ route('technologies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="text" class="form-control" id="logo" name="logo">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="6" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
