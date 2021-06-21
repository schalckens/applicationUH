@extends('layouts.app')

@section('title')
    Civilstate
@endsection

@section('content')

    <h1>Etat civil:</h1>
    <form>
        <div>
            <a>{{ $civilstate->user_id }}</a>
            <a>{{ $civilstate->gender }}</a>
            <a>{{ $civilstate->name }}</a>
            <a>{{ $civilstate->birthname }}</a>
            <a>{{ $civilstate->firstname }}</a>
            <a>{{ $civilstate->firstname2 }}</a>
            <a>{{ $civilstate->firstname3 }}</a>
            <a>{{ $civilstate->birthdate }}</a>
            <a>{{ $civilstate->birthplace }}</a>
            <a>{{ $civilstate->nationality_id }}</a>
        </div>
    </form>

@endsection