@extends('layouts.app')

@section('content')
<h1>Détails du groupe</h1>
<p>Nom : {{ $groupe->nom }}</p>
<p>Année Scolaire : {{ $groupe->anne_scholaire }}</p>
@endsection