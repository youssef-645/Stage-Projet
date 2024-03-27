@extends('layouts.app')

@section('content')
<h1>Modifier le parent</h1>
<form action="{{ route('parents.update', $parent->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $parent->nom }}" placeholder="Nom">
    <input type="text" name="prenom" value="{{ $parent->prenom }}" placeholder="Prénom">
    <input type="text" name="telephone" value="{{ $parent->telephone }}" placeholder="Téléphone">
    <!-- Ajoutez d'autres champs si nécessaire -->
    <button type="submit">Modifier</button>
</form>
@endsection