@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Détails de la classe</h1>
  <p><strong>Nom :</strong> {{ $classe->nom }}</p>
</div>
@endsection