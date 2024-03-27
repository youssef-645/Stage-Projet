@extends('layouts.app')

@section('content')
<h2 class="my-4">List des Groupes</h2>
<form action="{{ route('eleves.search') }}" method="GET">
    <div class="form-group">
        <input type="text" name="query" class="form-control w-75" placeholder="Search...">
        <button type="submit" class="mt-4 mb-4 btn btn-primary">Search</button>
    </div>
</form>
<ul>
    @foreach($groupes as $groupe)
    <li>{{ $groupe->nom }}</li>
    @endforeach
</ul>
@endsection