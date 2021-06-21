@extends('layouts.app')

@section('title')
    Lawyers
@endsection

@section('content')

    <h1>Créer un avocat : </h1>
    <form method='POST' action="{{ route('lawyers.store') }}">
        @csrf
        <div>
            <label for="contactid"> Id contact : </label>
            <input type="mediumtext" name="contact_id" id="contactid" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="civilstateid"> Id civilstate : </label>
            <input type="mediumtext" name="civilstate_id" id="civilstateid" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="barreau"> Barreau : </label>
            <input type="mediumtext" name="barreau" id="barreau" class="border-gray-600 border-2">
        </div>
        <div>
            <label for="userid"> Id utilisateur : </label>
            <input type="mediumtext" name="user_id" id="userid" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
