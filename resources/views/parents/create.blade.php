@extends('layouts.app')

@section('content')
<h1>Ajouter un parent</h1>
<form action="{{ route('parents.store') }}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="telephone" placeholder="Téléphone">
    <!-- Ajoutez d'autres champs si nécessaire -->
    <button type="submit">Ajouter</button>
</form>
@endsection