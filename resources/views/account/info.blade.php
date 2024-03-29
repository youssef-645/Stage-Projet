@extends('layouts.app')

@section('title', 'user Information')

@section('content')
<div class="container">
  <h1 class="mb-4">Account Informations</h1>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>ID</th>
        <td>{{ $user->id }}</td>
      </tr>
      <tr>
        <th>Username</th>
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
</div>
@endsection