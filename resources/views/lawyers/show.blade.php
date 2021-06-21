@extends('layouts.app')

@section('title')
    Lawyer
@endsection

@section('content')

    <h1> Avocat :</h1>
    <form>
        <div>
            <a>{{ $lawyer->contact_id }}</a>
            <a>{{ $lawyer->civilstate_id }}</a>
            <a>{{ $lawyer->barreau }}</a>
            <a>{{ $lawyer->user_id }}</a>
        </div>
    </form>

@endsection