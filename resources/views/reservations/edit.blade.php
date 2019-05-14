@extends('layout')

@section('title', 'Reservering Bewerken')

@section('content')

<form method="POST" action="/reservations/{{ $reservation->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div style="margin-bottom: 1em">
        type voertuig:
        <input type="text" name="type_vehicle" placeholder="type voertuig" value="{{ $reservation->type_vehicle }}">
    </div>

    <div style="margin-bottom: 1em">
        in de agenda vanaf:
        <input type="date" name="agenda_from" placeholder="datetime-local" value="{{ $reservation->agenda_from }}">
    </div>

    <div style="margin-bottom: 1em">
        in de agenda tot:
        <input type="date" name="agenda_until" placeholder="datetime-local" value="{{ $reservation->agenda_until }}">
    </div>

    <div style="margin-bottom: 1em">
        gestald vanaf:
        <input type="date" name="from_when" placeholder="datetime-local" value="{{ $reservation->from_when }}">
    </div>

    <div style="margin-bottom: 1em">
        gestald tot:
        <input type="date" name="until_when" placeholder="datetime-local" value="{{ $reservation->until_when }}">
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