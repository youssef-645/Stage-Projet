@extends('layouts.app')

@section('content')
<h1>Créer une matière</h1>
<form action="{{ route('matieres.store') }}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom de la matière">
    <button type="submit">Ajouter</button>
</form>
@endsection