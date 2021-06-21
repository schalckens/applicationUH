@extends('layouts.app')

@section('title')
    Civilstate
@endsection

@section('content')

    <h1>Editer un état civil : </h1>
    <form method='POST' action="{{ route('civilstates.update', ['id' => $civilstate->id]) }}">
        @csrf
        <input type="bigIncrements" name="user_id" class="border-gray-600 border-2" value="{{$civilstate->user_id}}" onFocus="this.value='';">
        <input type="tinyInteger" name="gender" class="border-gray-600 border-2" value="{{$civilstate->gender}}" onFocus="this.value='';">
        <input type="mediumtext" name="name" class="border-gray-600 border-2" value="{{$civilstate->name}}" onFocus="this.value='';">
        <input type="mediumtext" name="birthname" class="border-gray-600 border-2" value="{{$civilstate->birthname}}" onFocus="this.value='';">
        <input type="mediumtext" name="firstname" class="border-gray-600 border-2" value="{{$civilstate->firstname}}" onFocus="this.value='';">
        <input type="mediumtext" name="firstname2" class="border-gray-600 border-2" value="{{$civilstate->firstname2}}" onFocus="this.value='';">
        <input type="mediumtext" name="firstname3" class="border-gray-600 border-2" value="{{$civilstate->firstname3}}" onFocus="this.value='';">
        <input type="mediumtext" name="birthdate" class="border-gray-600 border-2" value="{{$civilstate->birthdate}}" onFocus="this.value='';">
        <input type="mediumtext" name="birthplace" class="border-gray-600 border-2" value="{{$civilstate->birthplace}}" onFocus="this.value='';">
        <input type="bigIncrements" name="nationality_id" class="border-gray-600 border-2" value="{{$civilstate->nationality_id}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>

@endsection