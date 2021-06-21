@extends('layouts.app')

@section('title')
    Lawfirm
@endsection

@section('content')

    <h1>Créer un cabinet d'avocat : </h1>
    <form method='POST' action="{{ route('lawfirms.store') }}">
        @csrf
        <div>
            <label for="contactid"> Id contact : </label>
            <input type="mediumtext" name="contact_id" id="contactid" class="border-gray-600 border-2">
        </div>
        <div class="button">
            <button type="submit" class="bg-blue-600">Valider</button>
        </div>
    </form>

@endsection
