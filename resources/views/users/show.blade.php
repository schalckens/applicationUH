@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')

    <h1>Utilisateur :</h1>
    <form>
        <div>
            <a>{{ $user->role_id }}</a>
        </div>
    </form>

@endsection