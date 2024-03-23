@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Enseignant</h2>
    <form action="{{ route('enseignants.update', $enseignant->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('enseignants._form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection