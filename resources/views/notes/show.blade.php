@extends('layouts.app')

@section('content')
<h1>Détails de la note</h1>
<p>Valeur : {{ $note->valeur }}</p>
<p>Date : {{ $note->date }}</p>
<p>Élève : {{ $note->eleve->nom }}</p>
<p>Matière : {{ $note->matiere->nom }}</p>
<!-- Afficher d'autres détails si nécessaire -->
@endsection