@extends('layout')

@section('title', 'Klanten') 


@section('content')
    <h1>
        Klanten
    </h1>
    <ul>
        @foreach ($clients as $client)
            <li style="margin-bottom: 1em">
                <a href="/clients/{{ $client->id }}">
                    {{$client->first_name}} {{$client->last_name}}
                </a>
            </li>
        @endforeach
    </ul>

    <p style="margin-bottom: 1em">
        <a href="/clients/create">Nieuwe klant aanmaken</a>
    </p>
@endsection