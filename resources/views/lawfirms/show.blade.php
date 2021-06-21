@extends('layouts.app')

@section('title')
    Lawfirm
@endsection

@section('content')

    <h1>Cabinet d'avocat :</h1>
    <form>
        <div>
            <a>{{ $lawfirm->contact_id }}</a>
        </div>
    </form>

@endsection