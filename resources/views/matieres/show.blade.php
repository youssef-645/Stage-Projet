@extends('layouts.app')

@section('content')
<h1>Détails de la matière</h1>
<p>Nom : {{ $matiere->nom }}</p>
<!-- Afficher d'autres détails si nécessaire -->
@endsection