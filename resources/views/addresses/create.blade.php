@extends('layouts.app')

@section('title')
    Address
@endsection

@section('content')

    <h1>Créer une addresse : </h1>
    <form method='POST' action="{{ route('addresses.store') }}">
        @csrf
        <div>
            <label for="addressprinc"> Adresse : </label>
            <input type="mediumtext" name="address" id="addressprinc" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="addresscomp"> Complément d'adresse : </label>
            <input type="mediumtext" name="address2" id="addresscomp" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="city"> Ville : </label>
            <input type="mediumtext" name="city" id="city" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="zipcode"> Code postal : </label>
            <input type="mediumtext" name="zip_code" id="zipcode" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
