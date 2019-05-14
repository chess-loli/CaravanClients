@extends('layout')

@section('title', 'Nieuwe Reservering')

@section('content')

<form method="POST" action="/reservations">
    {{ csrf_field() }}

    <div style="margin-bottom: 1em">
        type voertuig:
        <input type="text" name="type_vehicle" placeholder="type voertuig" default="caravan">
    </div>

    <div style="margin-bottom: 1em">
        in de agenda vanaf:
        <input type="date" name="agenda_from" placeholder="datetime-local" default="datetime-local">
    </div>

    <div style="margin-bottom: 1em">
        in de agenda tot:
        <input type="date" name="agenda_until" placeholder="datetime-local" default="datetime-local">
    </div>

    <div style="margin-bottom: 1em">
        gestald vanaf:
        <input type="date" name="from_when" placeholder="datetime-local" default="null">
    </div>

    <div style="margin-bottom: 1em">
        gestald tot:
        <input type="date" name="until_when" placeholder="datetime-local" default="null">
    </div>
    
    <div>
        Klant: 
        <select name="client_id">
            @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
    </div>
    
    <button type="submit" style="margin-bottom: 1em">opslaan</button>



</form>


@endsection