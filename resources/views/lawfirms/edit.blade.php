@extends('layouts.app')

@section('title')
    Lawfirm
@endsection

@section('content')

    <h1>Editer un cabinet d'avocat : </h1>
    <form method='POST' action="{{ route('lawfirms.update', ['id' => $lawfirm->id]) }}">
        @csrf
        <input type="mediumtext" name="address" class="border-gray-600 border-2" value="{{$lawfirm->contact_id}}" onFocus="this.value='';">
        <button type="submit" class="bg-blue-600">Valider</button>
    </form>
    
@endsection