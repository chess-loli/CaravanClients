@extends('layout')

@section('title', 'Klant')

@section('content')

<h1 >{{$client->first_name}} {{$client->last_name}}</h1>

<table class='table borderless'>
    <tbody>
        <tr>
            <th scope="row">Straat</th>
            <td>{{ $client->adress_street }}</td>
        </tr>
        <tr>
            <th scope="row">Postcode</th>
            <td>{{ $client->adress_zip }}</td>
        </tr>
        <tr>
            <th scope="row">Plaats</th>
            <td>{{ $client->adress_city }}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th scope="row">Telefoon</th>
            <td>{{ $client->phone }}</td>
        </tr>
    </tbody>
</table>



<p>
    <a class="btn btn-primary" href="/clients/{{ $client->id }}/edit" role="button">Bewerken</a>
</p>

@endsection