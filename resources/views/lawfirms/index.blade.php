@extends('layouts.app')

@section('title')
    Lawfirm
@endsection

@section('content')

    <h1>Cabinets d'avocat :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('lawfirms.create') }}" role="button">Créer un cabinet d'avocat</a></button>
    @foreach($lawfirms as $lawfirm)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('lawfirms.show',['id' => $lawfirm->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $lawfirm->contact_id }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('lawfirms.edit',['id' => $lawfirm->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('lawfirms.delete',['id' => $lawfirm->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
