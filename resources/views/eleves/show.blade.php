@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="col">Détails de l'élève</h2>
        @if(session('success'))
        <div id="tempAlert" class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="col my-2">
            <form method="POST" class="d-inline" action="{{ route('eleves.destroy', $eleve->id) }}" onsubmit="return confirmDelete()">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mr-3">Supprimer</button>
            </form>
            <script>
                function confirmDelete() {
                    return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?');
                }
            </script>

            <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-success">Update</a>
        </div>
    </div>
    <table class="table">
        <tbody>
            <tr>
                <th>ID:</th>
                <td>{{ $eleve->id }}</td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td>{{ $eleve->nom }}</td>
            </tr>
            <tr>
                <th>Prénom:</th>
                <td>{{ $eleve->prenom }}</td>
            </tr>
            <tr>
                <th>Date de Naissance:</th>
                <td>{{ $eleve->date_naissance }}</td>
            </tr>
            <tr>
                <th>Adresse:</th>
                <td>{{ $eleve->adresse }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $eleve->email }}</td>
            </tr>
            <tr>
                <th>Groupe:</th>
                <td>{{ $eleve->groupe ? $eleve->groupe->nom : 'N/A' }}</td>
            </tr>
            <tr>
                <th>Parents:</th>
                <td>
                    @forelse($eleve->parentes as $parent)
                    {{ $parent->nom }} {{ $parent->prenom }}<br>
                    @empty
                    N/A
                    @endforelse
                </td>
            </tr>

        </tbody>

    </table>
</div>
<script>
    setTimeout(function() {
        $('#tempAlert').fadeOut('slow');
    }, 2000);
</script>
@endsection