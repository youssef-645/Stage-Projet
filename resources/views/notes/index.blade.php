@extends('layouts.app')

@section('content')
<h1>Liste des notes</h1>
<table class="table">
    <thead>
        <tr>
            <th>Élève</th>
            <th>Note</th>
            <th>Matière</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{ $note->eleve->nom }}</td>
            <td>{{ $note->valeur }}</td>
            <td>{{ $note->matiere->nom }}</td>
            <td>{{ $note->date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $notes->links() }}
@endsection