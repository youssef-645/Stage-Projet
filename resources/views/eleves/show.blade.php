@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Eleve Details</h2>
    <p><strong>Nom:</strong> {{ $eleve->nom }}</p>
    <p><strong>Prénom:</strong> {{ $eleve->prenom }}</p>
    <p><strong>Date de Naissance:</strong> {{ $eleve->date_naissance }}</p>
    <p><strong>Adresse:</strong> {{ $eleve->adresse }}</p>
    <p><strong>Email:</strong> {{ $eleve->email }}</p>
</div>
@endsection