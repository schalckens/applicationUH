@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')

    <h1>Créer un utilisateur : </h1>
    <form method='POST' action="{{ route('users.store') }}">
        @csrf
        <div>
            <label for="roleid"> Id role : </label>
            <input type="mediumtext" name="role_id" id="roleid" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
