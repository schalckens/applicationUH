@extends('layouts.app')

@section('title')
    Role
@endsection

@section('content')

    <h1>Roles :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('roles.create') }}" role="button">Créer un role</a></button>
    @foreach($roles as $role)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('roles.show',['id' => $role->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $role->name }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('roles.edit',['id' => $role->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('roles.delete',['id' => $role->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
