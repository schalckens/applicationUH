@extends('layouts.app')

@section('title')
    Civilstate
@endsection

@section('content')

    <h1>Etat Civils:</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('civilstates.create') }}" role="button">Créer un état civil</a></button>
    @foreach($civilstates as $civilstate)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('civilstates.show',['id' => $civilstate->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $civilstate->user_id }}, {{ $civilstate->gender }}, {{ $civilstate->name }}, {{ $civilstate->birthname }}, {{ $civilstate->firstname }}, {{ $civilstate->firstname2 }}, {{ $civilstate->firstname3 }}, {{ $civilstate->birthdate }}, {{ $civilstate->birthplace }}, {{ $civilstate->nationality_id }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('civilstates.edit',['id' => $civilstate->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('civilstates.delete',['id' => $civilstate->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
            
        </div>

    @endforeach
    
@endsection
