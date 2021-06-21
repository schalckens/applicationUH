@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

    <h1>Créer un contact : </h1>
    <form method='POST' action="{{ route('contacts.store') }}">
        @csrf
        <div>
            <label for="userid"> Id utilisateur : </label>
            <input type="bigInteger" name="user_id" id="userid" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="addressid"> Id adresse: </label>
            <input type="bigInteger" name="address_id" id="addressid" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="phone"> Téléphone : </label>
            <input type="mediumtext" name="phone" id="phone" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="email"> Mail : </label>
            <input type="mediumtext" name="email" id="email" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
