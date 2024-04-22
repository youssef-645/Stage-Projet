@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">List des Enseignants</h2>

    <form action="{{ route('enseignants.search') }}" method="POST">
        <div class="form-group">
            <input type="text" name="query" class="form-control w-75" placeholder="Rechercher...">
            <button type="submit" class="mt-4 mb-4 btn btn-primary">Rechercher</button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Date de Naissance</th>
                    <th>Email</th>
                    <th>Matieres</th>
                    <th>Groupes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enseignants as $enseignant)
                <tr>
                    <td>{{ $enseignant->id }}</td>
                    <td>{{ $enseignant->nom }}</td>
                    <td>{{ $enseignant->prenom }}</td>
                    <td>{{ $enseignant->telephone }}</td>
                    <td>{{ $enseignant->address }}</td>
                    <td>{{ $enseignant->date_naissance }}</td>
                    <td>{{ $enseignant->email }}</td>
                    <td>
                        @forelse($enseignant->matieres as $matiere)
                        {{ $matiere->nom }}@if(!$loop->last), @endif
                        @empty
                        N/A
                        @endforelse
                    </td>
                    <td>
                        @forelse($enseignant->groupes as $groupe)
                        {{ $groupe->nom }}@if(!$loop->last), @endif
                        @empty
                        N/A
                        @endforelse
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $enseignants->links() }}
</div>
@endsection