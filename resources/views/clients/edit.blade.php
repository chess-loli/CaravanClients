@extends('layout')

@section('title', 'Bewerken')

@section('content')

<form method="POST" action="/clients/{{ $client->id }}" style="margin-bottom: 1em">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div style="margin-bottom: 1em">
        Voornaam: 
        <input type="text" name="first_name" placeholder="First Name" value="{{ $client->first_name }}">
    </div>

    <div style="margin-bottom: 1em">
        Achternaam: 
        <input type="text" name="last_name" placeholder="Last Name" value="{{ $client->last_name }}">
    </div>

    <div style="margin-bottom: 1em">
        Straat:
        <input type="text" name="adress_street" placeholder="street name and number" value="{{ $client->adress_street }}">
    </div>

    <div style="margin-bottom: 1em">
        Postcode:
        <input type="text" name="adress_zip" placeholder="postal code/zip" value="{{ $client->adress_zip }}">
    </div>

    <div style="margin-bottom: 1em">
        Plaats:
        <input type="text" name="adress_city" placeholder="city name" value="{{ $client->adress_city }}">
    </div>

    <div style="margin-bottom: 1em">
        Email:
        <input type="text" name="email" placeholder="email adress" value="{{ $client->email }}">
    </div>

    <div style="margin-bottom: 1em">
        Telefoon nr:
        <input type="text" name="phone" placeholder="phone number" value="{{ $client->phone }}">
    </div>

    <div style="margin-bottom: 1em">
        <button type="submit">Bewerking opslaan</button>
    </div> 
</form>

<form method="POST" action="/clients/{{ $client->id }}">
{{ method_field("DELETE") }}
{{ csrf_field() }}

    <div>
        <button type="submit">Klant verwijderen</button>
    </div>
</form>

@endsection
