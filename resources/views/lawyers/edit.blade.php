@extends('layouts.app')

@section('title')
    Lawyer
@endsection

@section('content')

    <h1>Editer un avocat : </h1>
    <form method='POST' action="{{ route('lawyers.update', ['id' => $lawyer->id]) }}">
        @csrf
        <input type="mediumtext" name="contact_id" class="border-gray-600 border-2" value="{{$lawyer->contact_id}}" onFocus="this.value='';">
        <input type="mediumtext" name="civilstate_id" class="border-gray-600 border-2" value="{{$lawyer->civilstate_id}}" onFocus="this.value='';">
        <input type="mediumtext" name="barreau" class="border-gray-600 border-2" value="{{$lawyer->barreau}}" onFocus="this.value='';">
        <input type="mediumtext" name="user_id" class="border-gray-600 border-2" value="{{$lawyer->user_id}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>
    
@endsection