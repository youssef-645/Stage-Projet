@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            var alerts = document.querySelectorAll(".alert");
            alerts.forEach(function(alert) {
                alert.style.display = "none";
            });
        }, 2000);
    </script>
    @endif

    <h2 class="my-4">Liste des Élèves</h2>

    <form id="searchForm" action="{{ route('eleves.index') }}" method="get">
        <div class="form-group">
            <select id="groupe" name="groupe" class="form-control mb-3">
                <option value="">Filtrer par groupes </option>
                @foreach($groupes as $groupe)
                <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" id="searchId" name="id" placeholder="Rechercher avec ID:" class="form-control">
        </div>
        <button type="submit" class="my-4 btn btn-sm btn-primary">Rechercher</button>
    </form>

    @if($eleves && $eleves->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Email</th>
                <th>Groupe</th>
                <th>Actions</th>
                <th>Parents</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td>{{ $eleve->date_naissance }}</td>
                <td>{{ $eleve->email }}</td>
                <td>{{ $eleve->groupe ? $eleve->groupe->nom : 'N/A' }}</td>
                <td>
                    <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-sm btn-success">?</a>
                    <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="m-1 btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')">x</button>
                    </form>
                </td>
                <td>
                    @if($eleve->parentes)
                    @foreach($eleve->parentes as $parent)
                    {{ $parent->nom }} {{ $parent->prenom }}<br>
                    @endforeach
                    @else
                    N/A
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $eleves->links() }}
    @else
    <p class="mt-3">Aucun élève trouvé.</p>
    @endif
</div>
@endsection