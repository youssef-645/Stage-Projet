@extends('layouts.app')

@section('content')
<h1>Créer une note</h1>
<form action="{{ route('notes.store') }}" method="POST">
    @csrf
    <input type="text" name="valeur" placeholder="Valeur de la note">
    <input type="date" name="date" placeholder="Date de la note">
    <!-- Ajoutez des champs supplémentaires si nécessaire -->
    <button type="submit">Ajouter</button>
</form>
@endsection