@extends('layout')

@section('title', 'Nieuwe Reservering')

@section('content')

<form method="POST" action="/reservations">
    {{ csrf_field() }}

    <div class="form-group">
        <div>
            Type voertuig:
            <input type="text" class="form-control" name="type_vehicle" placeholder="type voertuig">
        </div>
    </div>

    <div class="form-group">
        <div>
            In de agenda vanaf:
            <input type="date" class="form-control" name="agenda_from" default="datetime-local">
        </div>
    </div>

   <div class="form-group">
        <div>
            In de agenda tot:
            <input type="date" class="form-control" name="agenda_until" default="datetime-local">
        </div>
    </div>

    <div class="form-group">
        <div>
            Gestald vanaf:
            <input type="date" class="form-control" name="from_when" default="datetime-local">
        </div>
    </div>

    <div class="form-group">
        <div>
            Gestald tot:
            <input type="date" class="form-control" name="until_when" default="datetime-local">
        </div>
    </div>
    
    <div class="form-group">        
        Klant:
        <select class="form-control" name="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">       
        Plek nr:
        <select class="form-control" name="storage_spot_id">
            @foreach ($storageSpots as $storageSpot)
                <option value="{{ $storageSpot->id }}">{{ $storageSpot->plan_nr }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        Toevoeging:
        <select class="form-control" name="plan_add">
            <option value="nvt">nvt</option>
            <option value="a">a</option>
            <option value="b">b</option>
            <option value="c">c</option>
        </select>
    </div>
    
    <button class="btn btn-primary" type="submit" >opslaan</button>
</form>


@endsection