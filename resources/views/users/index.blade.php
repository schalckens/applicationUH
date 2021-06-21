@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')

    <h1>Utilisateurs :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('users.create') }}" role="button">Créer un utilisateurs</a></button>
    @foreach($users as $user)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('users.show',['id' => $user->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $user->role_id }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('users.edit',['id' => $user->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('users.delete',['id' => $user->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
