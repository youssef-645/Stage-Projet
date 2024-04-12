@extends('layouts.app')

@section('content')
<h1>Modifier la note</h1>
<form action="{{ route('examens.update', $examen->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="note" value="{{ $examen->note }}" placeholder="la note">
    <input type="date" name="date" value="{{ $examen->created_at }}" placeholder="Date">
    <!-- Ajoutez des champs supplémentaires si nécessaire -->
    <button type="submit">Modifier</button>
</form>
@endsection