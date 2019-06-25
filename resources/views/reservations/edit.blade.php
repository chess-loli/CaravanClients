@extends('layout')

@section('title', 'Reservering Bewerken')

@section('content')

<form method="POST" action="/reservations/{{ $reservation->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="form-group">
        type voertuig:
        <input type="text" class="form-control" name="type_vehicle" value="{{ $reservation->type_vehicle }}" default="{{ $reservation->type_vehicle }}">
    </div>

    <div class="form-group">
        in de agenda vanaf:
        <input type="date" class="form-control" name="agenda_from" value="{{ $reservation->agenda_from }}" default="{{ $reservation->agenda_from }}">
    </div>

    <div class="form-group">
        in de agenda tot:
        <input type="date" class="form-control" name="agenda_until" value="{{ $reservation->agenda_until }}" default="{{ $reservation->agenda_until }}">
    </div>

    <div class="form-group">
        gestald vanaf:
        <input type="date" class="form-control" name="from_when" value="{{ $reservation->from_when }}" default="{{ $reservation->from_when }}">
    </div>

    <div class="form-group">
        gestald tot:
        <input type="date" class="form-control" name="until_when" value="{{ $reservation->until_when }}" default="{{ $reservation->until_when }}">
    </div>
    
    <div class="form-group">
        Klant: 
        <select name="client_id" class="form-control">
            @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        Plek nr:
        <select name="storage_spot_id" class="form-control">
            @foreach ($storageSpots as $storageSpot)
            <option value="{{ $storageSpot->id }}">{{ $storageSpot->plan_nr }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        Toevoeging:
        <select name="plan_add" class="form-control">
            <option value="nvt">nvt</option>
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">opslaan</button>

</form>

<form method="POST" action="/reservations/{{ $reservation->id }}">
{{ method_field("DELETE") }}
{{ csrf_field() }}

    <div>
        <button type="submit" class="btn btn-primary">Reservering verwijderen</button>
    </div>
</form>


@endsection