@extends('layout')

@section('title', 'Reservering')

@section('content')

<table class='table borderless'>
    <tbody>
        <tr>
            <th scope="row">Klant</th>
            <td><a href="/clients/{{ $reservation->client->id }}">{{ $reservation->client->first_name }} {{ $reservation->client->last_name }}<a></td>
        </tr>
        <tr>
            <th scope="row">Type voertuig</th>
            <td>{{ $reservation->type_vehicle }}</td>
        </tr>
        <tr>
            <th scope="row">In de agenda vanaf</th>
            <td>{{ $reservation->agenda_from }}</td>
        </tr>
        <tr>
            <th scope="row">In de agenda tot</th>
            <td>{{ $reservation->agenda_until }}</td>
        </tr>
        <tr>
            <th scope="row">Gestald vanaf</th>
            <td>{{ $reservation->from_when }}</td>
        </tr>
        <tr>
            <th scope="row">Gestald tot</th>
            <td>{{ $reservation->until_when }}</td>
        </tr>
        <tr>
            <th scope="row">Plek nr</th>
            <td>{{ $reservation->storageSpot->plan_nr }} </td>
        </tr>
        <tr>
            <th scope="row">Toevoeging</th>
            <td>{{ $reservation->plan_add }}</td>
        </tr>
    </tbody>
</table>

<p>
    <a class="btn btn-primary" href="/reservations/{{ $reservation->id }}/edit" role="button">Bewerken</a>
</p>


@endsection