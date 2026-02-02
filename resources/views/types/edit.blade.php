@extends('layouts.master')
@section('title', 'Admin - Edit Type')

@section('content')
    <h1 class="mb-3">Modifica Tipo</h1>
    <form class="form-control" action="{{ route('types.update', $type->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="6" name="description">{{$type->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
