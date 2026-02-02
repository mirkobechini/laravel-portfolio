@extends('layouts.master')
@section('title', 'Admin - Create New Type')

@section('content')
    <h1 class="mb-3">Crea Nuovo Tipo</h1>
    <form class="form-control" action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="6" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
