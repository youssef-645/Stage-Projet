@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">List des Eleves</h2>
    <form action="{{ route('eleves.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="query" class="form-control w-75" placeholder="Search...">
            <button type="submit" class="mt-4 mb-4 btn btn-primary">Search</button>
        </div>
    </form>
    @if($eleves && $eleves->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Groupe</th>
                <th>Parents</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
            <tr>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td>{{ $eleve->date_naissance }}</td>
                <td>{{ $eleve->adresse }}</td>
                <td>{{ $eleve->email }}</td>
                <td>{{ $eleve->groupe ? $eleve->groupe->nom : 'N/A' }}</td>
                <td>
                    @if($eleve->parents)
                    @foreach($eleve->parents as $parent)
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
    {{ $eleves->links() }} <!-- Pagination Links -->
    @else
    <p>No eleves found.</p>
    @endif
</div>
@endsection