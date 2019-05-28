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
    
    <div style="margin-bottom: 1em">
        Klant: 
        <select name="client_id">
            @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-bottom: 1em">
        Plek nr:
        <select name="storage_spot_id">
            @foreach ($storageSpots as $storageSpot)
            <option value="{{ $storageSpot->id }}">{{ $storageSpot->plan_nr }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-bottom: 1em">
        Toevoeging:
        <select name="plan_add">
            <option value="nvt">nvt</option>
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
        </select>
    </div>
    
    <button type="submit" style="margin-bottom: 1em">opslaan</button>
</form>


@endsection