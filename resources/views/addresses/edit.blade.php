@extends('layouts.app')

@section('title')
    Address
@endsection

@section('content')

    <h1>Editer une addresse : </h1>
    <form method='POST' action="{{ route('addresses.update', ['id' => $address->id]) }}">
        @csrf
        <input type="mediumtext" name="address" class="border-gray-600 border-2" value="{{$address->address}}" onFocus="this.value='';">
        <input type="mediumtext" name="address2" class="border-gray-600 border-2" value="{{$address->address2}}" onFocus="this.value='';">
        <input type="mediumtext" name="city" class="border-gray-600 border-2" value="{{$address->city}}" onFocus="this.value='';">
        <input type="mediumtext" name="zip_code" class="border-gray-600 border-2" value="{{$address->zip_code}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>
@endsection