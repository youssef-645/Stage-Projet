@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Enseignant</h2>
    <form action="{{ route('enseignants.store') }}" method="POST">
        @csrf
        @include('enseignants._form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection