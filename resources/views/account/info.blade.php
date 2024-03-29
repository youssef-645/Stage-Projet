@extends('layouts.app')

@section('title', 'Informations de l\'utilisateur')

@section('content')
<div class="container">
  <h1 class="mb-4">Informations du compte</h1>
  <table class="table table-bordered">
    <tbody>
      <!-- Informations de l'utilisateur -->
      <tr>
        <th>ID</th>
        <td>{{ $user->id }}</td>
      </tr>
      <tr>
        <th>Nom d'utilisateur</th>
        <td>{{ $user->username }}</td>
      </tr>
      <tr>
        <th>Nom</th>
        <td>{{ $user->nom }}</td>
      </tr>
      <tr>
        <th>Prénom</th>
        <td>{{ $user->prenom }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $user->email }}</td>
      </tr>
      <tr>
        <th>Avatar</th>
        <td>{{ $user->avatar }}</td>
      </tr>
      <tr>
        <th>Téléphone</th>
        <td>{{ $user->telephone }}</td>
      </tr>
      <tr>
        <th>Role</th>
        <td>{{ $user->role }}</td>
      </tr>
      <tr>
        <th>Created At</th>
        <td>{{ $user->created_at }}</td>
      </tr>
      <tr>
        <th>Updated At</th>
        <td>{{ $user->updated_at }}</td>
      </tr>
    </tbody>
  </table>

  <!-- Formulaire de modification de mot de passe -->
  <div class="card">
    <div class="card-header">{{ __('Update Password') }}</div>

    <div class="card-body">
      @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <form method="POST" class="mb-4" action="{{ route('account.password') }}">
        @csrf

        <div class="form-group row">
          <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

          <div class="col-md-6">
            <input id="old_password" type="password" class="form-control my-2 @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="current-password">

            @error('old_password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control my-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

          <div class="col-md-6">
            <input id="password_confirmation" type="password" class="form-control my-2" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Update Password') }}
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection