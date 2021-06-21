@extends('layouts.app')

@section('title')
    Civilstate
@endsection

@section('content')

    <h1>Créer un état civil : </h1>
    <form method='POST' action="{{ route('civilstates.store') }}">
        @csrf
        <div>
            <label for="userid"> Id Utilisateurs : </label>
            <input type="bigIncrements" name="user_id" id="userid" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="gender"> Sexe : </label>
            <input type="tinyInteger" name="gender" id="gender" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="name"> Nom : </label>
            <input type="mediumtext" name="name" id="name" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="birthname"> Nom de naissance : </label>
            <input type="mediumtext" name="birthname" id="birthname" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="firstname"> Prénom : </label>
            <input type="mediumtext" name="firstname" id="firstname" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="firstgname2"> Deuxièmre prénom : </label>
            <input type="mediumtext" name="firstname2" id="firstname2" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="firstname3"> Troisième prénom : </label>
            <input type="mediumtext" name="firstname3" id="firstname3" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="birthdate"> Date de naissance : </label>
            <input type="dateTime" name="birthdate" id="birthdate" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="birthplace"> Lieu de naissance : </label>
            <input type="mediumtext" name="birthplace" id="birthplace" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="nationalityid"> Id Nationalité : </label>
            <input type="mediumtext" name="nationality_id" id="nationalityid" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
