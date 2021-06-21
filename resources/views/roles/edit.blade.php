@extends('layouts.app')

@section('title')
    Role
@endsection

@section('content')

    <h1>Editer un role: </h1>
    <form method='POST' action="{{ route('roles.update', ['id' => $role->id]) }}">
        @csrf
        <input type="mediumtext" name="name" class="border-gray-600 border-2" value="{{$role->name}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>

@endsection