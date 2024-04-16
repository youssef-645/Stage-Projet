@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Student</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="nom" class="col-sm-3 col-form-label">Nom:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mb-3" id="nom" name="nom" value="{{ old('nom', $eleve->nom ?? '') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prenom" class="col-sm-3 col-form-label">Prénom:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mb-3" id="prenom" name="prenom" value="{{ old('prenom', $eleve->prenom ?? '') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_naissance" class="col-sm-3 col-form-label">Date de Naissance:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control mb-3" id="date_naissance" name="date_naissance" value="{{ old('date_naissance', $eleve->date_naissance ?? '') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse" class="col-sm-3 col-form-label">Adresse:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mb-3" id="adresse" name="adresse" value="{{ old('adresse', $eleve->adresse ?? '') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $eleve->email ?? '') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="mt-4 btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection