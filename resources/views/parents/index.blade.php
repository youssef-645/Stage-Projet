@extends('layouts.app')

@section('content')
<h1 class="mt-4">Liste des parents</h1>
<a class="btn btn-primary m-4" href="{{ route('parents.create') }}">Ajouter un parent</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <!-- Ajoutez d'autres colonnes si nécessaire -->
        </tr>
    </thead>
    <tbody>
        @foreach($parents as $parent)
        <tr>
            <td>{{ $parent->nom }}</td>
            <td>{{ $parent->prenom }}</td>
            <td>{{ $parent->telephone }}</td>
            <!-- Ajoutez d'autres colonnes si nécessaire -->
        </tr>
        @endforeach
    </tbody>
</table>
@endsection