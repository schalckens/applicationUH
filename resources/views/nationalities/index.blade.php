@extends('layouts.app')

@section('title')
    Nationality
@endsection

@section('content')

    <h1> Nationalités :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <button><a class="btn btn-secondary" href="{{ route('nationalities.create') }}" role="button">Créer une nationalité</a></button>
    @foreach($nationalities as $nationality)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('nationalities.show',['id' => $nationality->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $nationality->name }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('nationalities.edit',['id' => $nationality->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('nationalities.delete',['id' => $nationality->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
