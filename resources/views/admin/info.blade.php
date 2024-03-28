@extends('layouts.app')

@section('title', 'Admin Information')

@section('content')
<div class="container">
  <h1 class="mb-4">Account Informations</h1>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>ID</th>
        <td>{{ $admin->id }}</td>
      </tr>
      <tr>
        <th>Username</th>
        <td>{{ $admin->username }}</td>
      </tr>
      <tr>
        <th>Nom</th>
        <td>{{ $admin->nom }}</td>
      </tr>
      <tr>
        <th>Prénom</th>
        <td>{{ $admin->prenom }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ $admin->email }}</td>
      </tr>
      <tr>
        <th>Avatar</th>
        <td>{{ $admin->avatar }}</td>
      </tr>
      <tr>
        <th>Téléphone</th>
        <td>{{ $admin->telephone }}</td>
      </tr>
      <tr>
        <th>Role</th>
        <td>{{ $admin->role }}</td>
      </tr>
      <tr>
        <th>Created At</th>
        <td>{{ $admin->created_at }}</td>
      </tr>
      <tr>
        <th>Updated At</th>
        <td>{{ $admin->updated_at }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection