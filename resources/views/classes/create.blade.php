@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une classe</h1>
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la classe</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection