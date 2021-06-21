@extends('layouts.app')

@section('title')
    Role
@endsection

@section('content')

    <h1>Role :</h1>
    <form>
        <div>
            <a>{{ $role->name }}</a>
        </div>
    </form>

@endsection