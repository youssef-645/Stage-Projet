@extends('layouts.app')

@section('content')
<h1>Modifier le groupe</h1>
<form action="{{ route('groupes.update', $groupe->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $groupe->nom }}" placeholder="Nom">
    <input type="text" name="anne_scholaire" value="{{ $groupe->anne_scholaire }}" placeholder="Année Scolaire">
    <button type="submit">Modifier</button>
</form>
@endsection