@extends('layouts.app')

@section('content')
<h1>Créer un groupe</h1>
<form action="{{ route('groupes.store') }}" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="anne_scholaire" placeholder="Année Scolaire">
    <button type="submit">Ajouter</button>
</form>
@endsection