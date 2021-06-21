@extends('layouts.app')

@section('title')
    Address
@endsection

@section('content')

    <h1>Addresse:</h1>
    <form>
        <div>
            <a>{{ $address->address }}</a>
            <a>{{ $address->address2 }}</a>
            <a>{{ $address->city }}</a>
            <a>{{ $address->zip_code }}</a>
        </div>
    </form>

@endsection