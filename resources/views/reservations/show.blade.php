@extends('layout')

@section('title', 'Reservering')

@section('content')

<div style="margin-bottom: 1em">
    klant: <a href="/clients/{{ $reservation->client->id }}">{{ $reservation->client->first_name }} {{ $reservation->client->last_name }}<a>
</div>

<div style="margin-bottom: 1em">
    type voertuig: {{ $reservation->type_vehicle }}
</div>

<div style="margin-bottom: 1em">
    in de agenda vanaf: {{ $reservation->agenda_from }}
</div>

<div style="margin-bottom: 1em">
    in de agenda tot: {{ $reservation->agenda_until }}
</div>

<div style="margin-bottom: 1em">
    gestald vanaf: {{ $reservation->from_when }}
</div>

<div style="margin-bottom: 1em">
    gestald tot: {{ $reservation->until_when }}
</div>

<div style="margin-bottom: 1em">
    plek nr: {{ $reservation->storageSpot->plan_nr }} 
</div>

<div style="margin-bottom: 1em">
    Toevoeging: {{ $reservation->plan_add }}
</div>


<p>
    <a href="/reservations/{{ $reservation->id }}/edit">Bewerken</a>
</p>


@endsection