@extends('layout')

@section('title', 'Bewerken')

@section('content')

<form method="POST" action="/clients/{{ $client->id }}" style="margin-bottom: 1em">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="form-group">
        Voornaam: 
        <input type="text" name="first_name" class="form-control" value="{{ $client->first_name }}">
    </div>

    <div class="form-group">
        Achternaam: 
        <input type="text" name="last_name" class="form-control" value="{{ $client->last_name }}">
    </div>

    <div class="form-group">
        Straat:
        <input type="text" name="adress_street" class="form-control" value="{{ $client->adress_street }}">
    </div>

    <div class="form-group">
        Postcode:
        <input type="text" name="adress_zip" class="form-control" value="{{ $client->adress_zip }}">
    </div>

    <div class="form-group">
        Plaats:
        <input type="text" name="adress_city" class="form-control" value="{{ $client->adress_city }}">
    </div>

    <div class="form-group">
        Email:
        <input type="text" name="email" class="form-control" value="{{ $client->email }}">
    </div>

    <div class="form-group">
        Telefoon nr:
        <input type="text" name="phone" class="form-control" value="{{ $client->phone }}">
    </div>


    <button type="submit" class="btn btn-primary">Bewerking opslaan</button>
    
</form>

<form method="POST" action="/clients/{{ $client->id }}">
{{ method_field("DELETE") }}
{{ csrf_field() }}

    <div>
        <button type="submit" class="btn btn-primary">Klant verwijderen</button>
    </div>
</form>

@endsection
