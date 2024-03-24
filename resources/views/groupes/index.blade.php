@extends('layouts.app')

@section('content')
<h1>Liste des groupes</h1>
<ul>
    @foreach($groupes as $groupe)
    <li>{{ $groupe->nom }}</li>
    @endforeach
</ul>
@endsection