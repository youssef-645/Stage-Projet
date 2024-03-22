@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Enseignant Details</h2>
    <p><strong>Nom:</strong> {{ $enseignant->nom }}</p>
    <p><strong>Prénom:</strong> {{ $enseignant->prenom }}</p>
    <!-- Other details to display -->
</div>
@endsection