@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

    <h1>Contacts :</h1>

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('contacts.create') }}" role="button">Créer un contact</a></button>
    @foreach($contacts as $contact)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('contacts.show',['id' => $contact->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $contact->user_id }}, {{ $contact->address_id }}, {{ $contact->phone }}, {{ $contact->email }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('contacts.edit',['id' => $contact->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('contacts.delete',['id' => $contact->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach

@endsection
