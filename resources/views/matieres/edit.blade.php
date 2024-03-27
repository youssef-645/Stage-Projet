@extends('layouts.app')

@section('content')
<h1>Modifier la matière</h1>
<form action="{{ route('matieres.update', $matiere->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $matiere->nom }}" placeholder="Nom de la matière">
    <button type="submit">Modifier</button>
</form>
@endsection