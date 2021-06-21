@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')

    <h1>Editer un utilisateur : </h1>
    <form method='POST' action="{{ route('users.update', ['id' => $user->id]) }}">
        @csrf
        <input type="mediumtext" name="role_id" class="border-gray-600 border-2" value="{{$user->role_id}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>

@endsection