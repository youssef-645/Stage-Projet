@extends('layouts.app')

@section('content')
<h1>Modifier la note</h1>
<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="valeur" value="{{ $note->valeur }}" placeholder="Valeur de la note">
    <input type="date" name="date" value="{{ $note->date }}" placeholder="Date de la note">
    <!-- Ajoutez des champs supplémentaires si nécessaire -->
    <button type="submit">Modifier</button>
</form>
@endsection