@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List of Eleves</h2>
    <ul>
        @foreach($eleves as $eleve)
        <li>{{ $eleve->prenom }} {{ $eleve->nom }}</li>
        @endforeach
    </ul>
</div>
@endsection