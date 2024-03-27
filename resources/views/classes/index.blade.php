@extends('layouts.app')

@section('content')
<h1 class="mt-4">Liste des classes</h1>
<a class="btn btn-primary m-4" href="{{ route('classes.create') }}">Ajouter une classe</a>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $classe)
        <tr>
            <td>{{ $classe->nom }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection