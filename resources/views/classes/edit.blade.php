@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier la classe</h1>
    <form action="{{ route('classes.update', $classe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la classe</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $classe->nom }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection