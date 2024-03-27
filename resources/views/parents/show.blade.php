@extends('layouts.app')

@section('content')
<h1>Détails du parent</h1>
<p>Nom : {{ $parent->nom }}</p>
<p>Prénom : {{ $parent->prenom }}</p>
<p>Téléphone : {{ $parent->telephone }}</p>
<!-- Ajoutez d'autres détails si nécessaire -->
@endsection