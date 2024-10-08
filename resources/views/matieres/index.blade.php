@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des matières</h1>
    <form action="{{ route('matieres.search') }}" class="my-3" method="POST">
        <div class="form-group">
            <input type="text" name="query" class="form-control w-75" placeholder="Rechercher...">
            <button type="submit" class="mt-4 mb-4 btn btn-primary">Rechercher</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Groupes</th>
                <th>Classes</th>
                <th>Enseignants</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matieres as $matiere)
            <tr>
                <td>{{ $matiere->id }}</td>
                <td>{{ $matiere->nom }}</td>
                <td>
                    @forelse($matiere->groupes as $groupe)
                    {{ $groupe->nom }} <br>
                    @empty
                    Aucun groupe
                    @endforelse
                </td>
                <td>
                    @forelse($matiere->classes as $classe)
                    {{ $classe->nom }} <br>
                    @empty
                    Aucune classe
                    @endforelse
                </td>
                <td>
                    @forelse($matiere->enseignantes as $enseignant)
                    {{ $enseignant->nom }} {{ $enseignant->prenom }} <br>
                    @empty
                    Aucun enseignant
                    @endforelse
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $matieres->links() }}
    </div>

    <a class="btn btn-primary my-4" href="{{ route('matieres.create') }}">Ajouter une matière</a>
</div>
@endsection