@extends('layouts.app')

@section('content')
<div class="d-flex">
    <h1 class="mt-4 pt-4">Liste des parents</h1>
    <a class="btn  btn-primary m-5" href="{{ route('parents.create') }}">Ajouter un parent</a>
</div>
<form action="{{ route('parents.search') }}" class="my-3" method="POST">
    <div class="form-group">
        <input type="text" name="query" class="form-control w-75" placeholder="Rechercher...">
        <button type="submit" class="mt-4 mb-4 btn btn-primary">Rechercher</button>
    </div>
</form>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($parents as $parent)
        <tr>
            <td>{{ $parent->nom }}</td>
            <td>{{ $parent->prenom }}</td>
            <td>{{ $parent->telephone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection