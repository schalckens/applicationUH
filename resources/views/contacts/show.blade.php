@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

    <h1>Contact :</h1>
    <form>
        <div>
            <a>{{ $contact->user_id }}</a>
            <a>{{ $contact->address_id }}</a>
            <a>{{ $contact->phone }}</a>
            <a>{{ $contact->email }}</a>
        </div>
    </form>

@endsection