@extends('layouts.app')

@section('title')
    Lawyer
@endsection

@section('content')

    <h1> Avocat :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('lawyers.create') }}" role="button">Créer un avocat</a></button>
    @foreach($lawyers as $lawyer)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('lawyers.show',['id' => $lawyer->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $lawyer->contact_id }}, {{ $lawyer->civilstate_id }}, {{ $lawyer->barreau }}, {{ $lawyer->user_id }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('lawyers.edit',['id' => $lawyer->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('lawyers.delete',['id' => $lawyer->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
