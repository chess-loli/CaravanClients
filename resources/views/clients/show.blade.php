@extends('layout')

@section('title', 'Klant')

@section('content')

<h1 >{{$client->first_name}} {{$client->last_name}}</h1>

<div style="margin-bottom: 1em">
    Straat: {{ $client->adress_street }}
</div>

<div style="margin-bottom: 1em">
    Postcode: {{ $client->adress_zip }}
</div>

<div style="margin-bottom: 1em">
    Plaats: {{ $client->adress_city }}
</div>

<div style="margin-bottom: 1em">
    Email: {{ $client->email }}
</div>

<div style="margin-bottom: 1em">
    Telefoon: {{ $client->phone }}
</div>

<div style="margin-bottom: 1em">
    Type Voertuig: 
    
</div>

<div style="margin-bottom: 1em">
    Parkeerplaats Plek nr:
    
</div>

<button>Bewerken</button>

@endsection