@extends('layouts.app')

@section('content')
<h1>Détails de la note</h1>
<p>Valeur : {{ $examen->valeur }}</p>
<p>Date : {{ $examen->date }}</p>
<p>Élève : {{ $examen->eleve->nom }}</p>
<p>Matière : {{ $examen->matiere->nom }}</p>
<!-- Afficher d'autres détails si nécessaire -->
@endsection