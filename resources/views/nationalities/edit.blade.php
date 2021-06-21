@extends('layouts.app')

@section('title')
    Nationality
@endsection

@section('content')

    <h1> Editer une nationalité : </h1>
    <form method='POST' action="{{ route('nationalities.update', ['id' => $nationality->id]) }}">
        @csrf
        <input type="mediumtext" name="name" class="border-gray-600 border-2" value="{{$nationality->name}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>

@endsection