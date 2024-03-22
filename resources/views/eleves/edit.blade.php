@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Eleve</h2>
    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('eleves._form')
        <button type="submit">Update</button>
    </form>
</div>
@endsection