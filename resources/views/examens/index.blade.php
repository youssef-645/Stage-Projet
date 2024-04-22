@extends('layouts.app')

@section('content')
<h1>Liste des examens</h1>
<form action="{{ route('examens.search') }}" class="my-3" method="POST">
    <div class="form-group">
        <input type="text" name="query" class="form-control w-75" placeholder="Rechercher...">
        <button type="submit" class="mt-4 mb-4 btn btn-primary">Rechercher</button>
    </div>
</form>
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
        @foreach($examens as $examen)
        <tr>
            <td>{{ $examen->eleve->nom }}</td>
            <td>{{ $examen->note }}</td>
            <td>{{ $examen->matiere->nom }}</td>
            <td>{{ $examen->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $examens->links() }}
@endsection