@extends('layouts.app')

@section('title')
    Role
@endsection

@section('content')

    <h1>Créer un role : </h1>
    <form method='POST' action="{{ route('roles.store') }}">
        @csrf
        <div>
            <label for="name"> Libellé : </label>
            <input type="mediumtext" name="name" id="name" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
