@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

    <h1>Editer un contact : </h1>
    <form method='POST' action="{{ route('contacts.update', ['id' => $contact->id]) }}">
        @csrf
        <input type="mediumtext" name="user_id" class="border-gray-600 border-2" value="{{$contact->user_id}}" onFocus="this.value='';">
        <input type="mediumtext" name="address_id" class="border-gray-600 border-2" value="{{$contact->address_id}}" onFocus="this.value='';">
        <input type="mediumtext" name="phone" class="border-gray-600 border-2" value="{{$contact->phone}}" onFocus="this.value='';">
        <input type="mediumtext" name="email" class="border-gray-600 border-2" value="{{$contact->email}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>

@endsection