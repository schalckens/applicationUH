@extends('layouts.app')

@section('title')
    Nationality
@endsection

@section('content')

    <h1> Nationalit√© :</h1>
    <form>
        <div>
            <a>{{ $nationality->name }}</a>
        </div>
    </form>

@endsection