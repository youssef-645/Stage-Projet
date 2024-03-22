@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Eleve</h2>
    <form action="{{ route('eleves.store') }}" method="POST">
        @csrf
        @include('eleves._form')
        <button type="submit">Create</button>
    </form>
</div>
@endsection