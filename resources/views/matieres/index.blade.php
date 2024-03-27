@extends('layouts.app')

@section('content')
<h1>Liste des matières</h1>
<ul>
    @foreach($matieres as $matiere)
    <li>{{ $matiere->nom }}</li>
    @endforeach
</ul>
<a class="btn btn-primary my-4" href="{{ route('matieres.create') }}">Ajouter une matière</a>
@endsection