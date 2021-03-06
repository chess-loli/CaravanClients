@extends('layout')

@section('title', 'Reserveringen')

@section('content')

<h1>Reserveringen</h1>

<ul>
    @foreach ($reservations as $reservation)
    <li style="margin-bottom: 1em">
       <a href="/reservations/{{ $reservation->id }}">{{ $reservation->client->first_name }} {{ $reservation->client->last_name }} {{ $reservation->agenda_from }} - {{ $reservation->until_when }}</a>
    </li>
    @endforeach
</ul>

<p style="margin-bottom: 1em">
    <a href="/reservations/create">Nieuwe reservering aanmaken</a>
</p>

@endsection